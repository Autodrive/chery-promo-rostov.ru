import Form from "../helpers/Form";
import Popup from "../helpers/Popup";
import axios from "axios";

$(document).ready(function() {
  var pop = new Popup($(".popup"));
  pop.i();

  $(document).on("click", "[js-popup]", function(e) {
    e.stopPropagation();
    e.preventDefault();
    pop.show($(this));
  });

  $(document).on("submit", "form", function(e) {
    e.preventDefault();

    var form = $(this);
    var formObj = new Form(form);
    var formData = new FormData(this);
    var popup = form.parents(".popup, .popup-find");
    if (!formObj.isValid()) {
      for (let name in formObj.errors) {
        formObj.showError(name, formObj.errors[name]);
      }
      return;
    }
    form.find("[type=submit]").prop("disabled", true);
    $("#success").addClass("show");
    if (popup.length) {
      pop.hide();
    }
    form.find("input").val("");
    if ($('.popup').find('.popup__title')) {
        ym(80617696,'reachGoal','sendform')
    }
    $.ajax({
      type: "POST",
      url: "ajax/send.php",
      data: formData,
      processData: false,
      contentType: false,
      success: (data) => {
        pop.hide();
        axios
          .post(
            "https://api.calltouch.ru/widget-service/v1/api/widget-request/user-form/create",
            {
              phone: formData.get("phone").replace(/\s|\+|\)|\(|-/g, ""),
              routeKey: "cheryrostov",
              sessionId: window.ct("calltracking_params", "s68io63b").sessionId,
            },
            {
              headers: {
                "Access-Token": ".eaUP1zEb7gcllz7ZGcKOd.gCFwhLGquPabTcJwwl5sRs",
              },
            }
          )
          .then(function(response) {
            console.log(response);
          })
          .catch(function(error) {
            console.log(error);
          });
        setTimeout(function() {
          form.find("button, [type=submit]").prop("disabled", false);
        }, 500);
      },
      error: (data) => {
        form.find("button, [type=submit]").prop("disabled", false);
        $("#success").removeClass("show");
        $("#error").addClass("show");
      },
    });
  });

  $(
    "#success .form-messages-close," +
      "#success .btn," +
      "#error .form-messages-close," +
      "#error .btn"
  ).click(function() {
    $(this)
      .parent()
      .removeClass("show");
  });
});
