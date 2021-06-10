"use strict";
var KTModalCreateApp = function() {
    var t, e, o, n, r = [];
    return {
        init: function() {
            t = document.querySelector("#kt_modal_create_app_stepper"), e = document.querySelector("#kt_modal_create_app_form"), o = document.querySelector('[data-kt-stepper-action="submit"]'), (n = new KTStepper(t)).on("kt.stepper.next", (function(t) {
                console.log("kt.stepper.next");
                var e = r[t.getCurrentStepIndex() - 1];
                e ? e.validate().then((function(e) {
                    console.log("validated!"), "Valid" == e ? (t.goNext(), KTUtil.scrollTop()) : Swal.fire({
                        text: "Sorry, looks like there are some errors detected, please try again.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-light"
                        }
                    }).then((function() {
                        KTUtil.scrollTop()
                    }))
                })) : (t.goNext(), KTUtil.scrollTop())
            })), n.on("kt.stepper.previous", (function(t) {
                console.log("stepper.previous"), t.goPrevious(), KTUtil.scrollTop()
            })), o.addEventListener("click", (function(t) {
                t.preventDefault(), Swal.fire({
                    text: "All is good! Please confirm the form submission.",
                    icon: "success",
                    showCancelButton: !0,
                    buttonsStyling: !1,
                    confirmButtonText: "Yes, submit!",
                    cancelButtonText: "No, cancel",
                    customClass: {
                        confirmButton: "btn fw-bold btn-primary",
                        cancelButton: "btn fw-bold btn-active-light-primary"
                    }
                }).then((function(t) {
                    t.value ? e.submit() : "cancel" === t.dismiss && Swal.fire({
                        text: "Your form has not been submitted!.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    })
                }))
            })), r.push(FormValidation.formValidation(e, {
                fields: {
                    appname: {
                        validators: {
                            notEmpty: {
                                message: "App name is required"
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        eleValidClass: "",
                        rowSelector: ".fv-row"
                    })
                }
            })), r.push(FormValidation.formValidation(e, {
                fields: {
                    dbname: {
                        validators: {
                            notEmpty: {
                                message: "Database name is required"
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        eleValidClass: "",
                        rowSelector: ".fv-row"
                    })
                }
            }))
        }
    }
}();
KTUtil.onDOMContentLoaded((function() {
    KTModalCreateApp.init()
}));