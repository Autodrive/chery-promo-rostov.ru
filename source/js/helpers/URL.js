var path = window.location.pathname;
var city = null;
var page = null;

if (path.indexOf('/page/') >= 0) {
    page = path.substr(path.indexOf('/page/') + 6);
    page = page.split('/')[0];
    page = parseInt(page);

    path = path.substr(0, path.indexOf('/page/'));
}


if (path.slice(-1) != '/') path += '/';

const URL = {
    path: path, // string - урл от домена или города и до /page или ?
    route: path.slice(1, -1).split('/'), // array - массив роутов
    page: page, // int - номер страницы
    search: window.location.search, // string ?...
    hash: window.location.hash, // string #...
    full: window.location.href // полный урл
}

export default URL