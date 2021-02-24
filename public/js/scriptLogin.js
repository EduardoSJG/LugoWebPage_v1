function emailCheck() {
    if ($("#email").val() == "") {
        $("#email").addClass("is-invalid");
        return false;
    } else {
        var regMail = /^([_a-zA-Z0-9-]+)(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+([a-zA-Z]{2,3})$/;
        if (regMail.test($("#email").val()) == false) {
            $("#email").addClass("is-invalid");
            return false;
        } else {
            $("#email").removeClass("is-invalid");
            $("#next-form").collapse("show");

        }
    }
}

function validation() {
    var patron = /^\d*$/; //Expresión regular para aceptar solo números enteros

    if (($("#username").val() == "") || ($("#password").val() == "") ||
        ($("#cpassword").val() == "") || ($("#telefono").val() == "") ||
        ($("#nombre").val() == "") || ($("#ap_pat").val() == "") ||
        ($("#ap_mat").val() == "") || ($("#direccion").val() == "") ||
        ($("#id_pais").val() == "") || ($("#id_entidad").val() == "") ||
        ($("#colonia").val() == "") || ($("#cp").val() == "") ||
        !patron.test($("#telefono").val()) || ($("#fecha_naci").val() == "")) {
        $("#username, #telefono, #password, #cpassword, #fecha_naci, #nombre, #ap_pat, #ap_mat, #direccion, #colonia, #cp, #id_pais, #id_entidad")
            .addClass("is-invalid");
        return false;
    } else {
        $("#username, #telefono, #password, #cpassword, #fecha_naci, #nombre, #ap_pat, #ap_mat, #direccion, #colonia, #cp, #id_pais, #id_entidad")
            .removeClass("is-invalid");
    }

    if ($("#password").val() != $("#cpassword").val()) {
        $("#cpassword").addClass("is-invalid");
        $("#cp").html(
            '<span class="text-danger">Las contraseñas no coinciden!</span>'
        );
        return false;
    }
}

function validationLog() {

    if (($("#username").val() == "") || ($("#password").val() == "")) {
        $("#username, #password,").addClass("is-invalid");
        return false;
    } else {
        $("#username, #password").removeClass("is-invalid");
        return true;
    }

}
$(document).ready(function(e) {
    $("#username").on("keyup", function() {
        if ($("#username").val() == "") {
            $("#username").addClass("is-invalid");
            return false;
        } else {
            $("#username").removeClass("is-invalid");
        }
    });
    $("#telefono").on("keyup", function() {
        var patron = /^\d*$/; //Expresión regular para aceptar solo números enteros

        if ($("#telefono").val() == "" || !patron.test($("#telefono").val())) {
            $("#telefono").addClass("is-invalid");

            return false;
        } else {
            $("#telefono").removeClass("is-invalid");
        }
    });
    $("#password").on("keyup", function() {
        if ($("#password").val() == "") {
            $("#password").addClass("is-invalid");
            return false;
        } else {
            $("#password").removeClass("is-invalid");
        }
    });
    $("#cpassword").on("keyup", function() {
        if ($("#cpassword").val() == "") {
            $("#cpassword").addClass("is-invalid");
            return false;
        } else {
            $("#cpassword").removeClass("is-invalid");
        }
    });
    $("#fecha_naci").on("keyup", function() {
        if ($("#fecha_naci").val() == "") {
            $("#fecha_naci").addClass("is-invalid");
            return false;
        } else {
            $("#fecha_naci").removeClass("is-invalid");
        }
    });
    $("#nombre").on("keyup", function() {
        if ($("#nombre").val() == "") {
            $("#nombre").addClass("is-invalid");
            return false;
        } else {
            $("#nombre").removeClass("is-invalid");
        }
    });
    $("#ap_pat").on("keyup", function() {
        if ($("#ap_pat").val() == "") {
            $("#ap_pat").addClass("is-invalid");
            return false;
        } else {
            $("#ap_pat").removeClass("is-invalid");
        }
    });
    $("#ap_mat").on("keyup", function() {
        if ($("#ap_mat").val() == "") {
            $("#ap_mat").addClass("is-invalid");
            return false;
        } else {
            $("#ap_mat").removeClass("is-invalid");
        }
    });
    $("#direccion").on("keyup", function() {
        if ($("#direccion").val() == "") {
            $("#direccion").addClass("is-invalid");
            return false;
        } else {
            $("#direccion").removeClass("is-invalid");
        }
    });
    $("#id_pais").on("keyup", function() {
        if ($("#id_pais").val() == "") {
            $("#id_pais").addClass("is-invalid");
            return false;
        } else {
            $("#id_pais").removeClass("is-invalid");
        }
    });
    $("#id_entidad").on("keyup", function() {
        if ($("#id_entidad").val() == "") {
            $("#id_entidad").addClass("is-invalid");
            return false;
        } else {
            $("#id_entidad").removeClass("is-invalid");
        }
    });
    $("#colonia").on("keyup", function() {
        if ($("#colonia").val() == "") {
            $("#colonia").addClass("is-invalid");
            return false;
        } else {
            $("#colonia").removeClass("is-invalid");
        }
    });
    $("#cp").on("keyup", function() {
        if ($("#cp").val() == "") {
            $("#cp").addClass("is-invalid");
            return false;
        } else {
            $("#cp").removeClass("is-invalid");
        }
    });

    jQuery(function($) {
        var input = $("[type=tel]");
        input.mobilePhoneNumber({ allowPhoneWithoutPrefix: "+1" });
        input.bind("country.mobilePhoneNumber", function(e, country) {
            $(".country").text(country || "");
        });
    });

});