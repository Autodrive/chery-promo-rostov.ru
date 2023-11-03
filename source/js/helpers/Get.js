import URL from './URL'

function GET() {
    var self = this;
    this.re = /([^&=]+)=?([^&]*)/g;

    this.data = null;

    this.init = function() {
        self.data = self.parse(URL.search);

        return self;
    }

    this.delete = function(key, search) {
        if (search == undefined)
        {
            delete self.data[key];
        } else {
            if (key.indexOf('[') > -1) {
                let key_1 = key.substr(0, key.indexOf('['));
                let key_2 = key.slice(key.indexOf('[') + 1, -1);

                if (typeof self.data[key_1][key_2] == 'string' || self.data[key_1][key_2].length == 1) {
                    delete self.data[key_1][key_2];
                    if (self.data[key_1].filter(function(){ return true; }).length == 0)
                        delete self.data[key_1];
                } else {
                    delete self.data[key_1][key_2][self.data[key_1][key_2].indexOf('' + search)];
                    self.data[key_1][key_2] = self.data[key_1][key_2].filter(function(){ return true; });
                }
            } else if (self.data[key].length == 1) {
                delete self.data[key];
            } else {
                delete self.data[key][self.data[key].indexOf('' + search)];
                self.data[key] = self.data[key].filter(function(){ return true; });
            }

            if (key === 'brand' && self.data.model !== undefined) {
                delete self.data.model[search];
                if (self.data.model.filter(function(){ return true; }).length == 0)
                    delete self.data.model;
            }
        }
    }

    this.buildQuery = function() {
        return self.serialize(self.data);
    }

    this.serialize = function(obj, prefix) {
        var str = [],
            p;

        for (p in obj) {
            if (obj.hasOwnProperty(p)) {
                var k = prefix ? prefix + "[" + p + "]" : p,
                    v = obj[p];

                str.push((v !== null && typeof v === "object") ?
                            self.serialize(v, k) :
                            encodeURIComponent(k) + "=" + encodeURIComponent(v));
            }
        }

        return str.join("&");
    }

    this.decode = function (str) {
        return decodeURIComponent(str.replace(/\+/g, ' '));
    }

    this.parse = function (query) {
        // be sure the query is a string
        query = query + '';

        if (query === '') query = window.location + '';

        var params = {}, e;
        if (query) {
            // remove # from end of query
            if (query.indexOf('#') !== -1) {
                query = query.substr(0, query.indexOf('#'));
            }

            // remove ? at the begining of the query
            if (query.indexOf('?') !== -1) {
                query = query.substr(query.indexOf('?') + 1, query.length);
            } else return {};

            // empty parameters
            if (query == '') return {};

            // execute a createElement on every key and value
            while (e = self.re.exec(query)) {
                var key = self.decode(e[1]);
                var value = self.decode(e[2]);
                self.createElement(params, key, value);
            }
        }
        return params;
    }

    this.createElement = function(params, key, value) {
        key = key + '';

        // if the key is a property
        if (key.indexOf('.') !== -1) {
            // extract the first part with the name of the object
            var list = key.split('.');

            // the rest of the key
            var new_key = key.split(/\.(.+)?/)[1];

            // create the object if it doesnt exist
            if (!params[list[0]]) params[list[0]] = {};

            // if the key is not empty, create it in the object
            if (new_key !== '') {
                self.createElement(params[list[0]], new_key, value);
            } else console.warn('Get.parse :: empty property in key "' + key + '"');
        } else
        // if the key is an array
        if (key.indexOf('[') !== -1) {
            // extract the array name
            var list = key.split('[');
            key = list[0] + '';

            // extract the index of the array
            var list = list[1].split(']');
            var index = list[0];

            // if index is empty, just push the value at the end of the array
            if (index == '') {
                if (!params) params = {};
                if (!params[key] || !$.isArray(params[key])) params[key] = [];
                params[key].push(value);
            } else
            // add the value at the index (must be an integer)
            {
                if (!params) params = {};
                if (!params[key] || !$.isArray(params[key])) params[key] = [];

                index = parseInt(index);

                if (params[key][index]) {
                    if (! $.isArray(params[key][index]))
                        params[key][index] = [params[key][index]];

                    params[key][index].push(value);
                } else {
                    params[key][index] = value;
                }
            }
        } else
        // just normal key
        {
            if (!params) params = {};
            params[key] = value;
        }
    }
}

const Get = (new GET()).init();

export default Get;