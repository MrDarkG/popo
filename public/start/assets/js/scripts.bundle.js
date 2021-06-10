"use strict";
var KTCookie = {
    get: function(e) {
        var t = document.cookie.match(new RegExp("(?:^|; )" + e.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, "\\$1") + "=([^;]*)"));
        return t ? decodeURIComponent(t[1]) : null
    },
    set: function(e, t, n) {
        null == n && (n = {}), (n = Object.assign({}, {
            path: "/"
        }, n)).expires instanceof Date && (n.expires = n.expires.toUTCString());
        var i = encodeURIComponent(e) + "=" + encodeURIComponent(t);
        for (var a in n)
            if (!1 !== n.hasOwnProperty(a)) {
                i += "; " + a;
                var r = n[a];
                !0 !== r && (i += "=" + r)
            }
        document.cookie = i
    },
    remove: function(e) {
        this.set(e, "", {
            "max-age": -1
        })
    }
};
"undefined" != typeof module && void 0 !== module.exports && (module.exports = KTCookie);
var KTDialer = function(e, t) {
    var n = this;
    if (e) {
        var i = {
                min: null,
                max: null,
                step: 1,
                decimals: 0,
                prefix: "",
                suffix: ""
            },
            a = function() {
                n.options = KTUtil.deepExtend({}, i, t), n.element = e, n.incElement = n.element.querySelector('[data-kt-dialer-control="increase"]'), n.decElement = n.element.querySelector('[data-kt-dialer-control="decrease"]'), n.inputElement = n.element.querySelector("input[type]"), c("decimals") && (n.options.decimals = parseInt(c("decimals"))), c("prefix") && (n.options.prefix = c("prefix")), c("suffix") && (n.options.suffix = c("suffix")), c("step") && (n.options.step = parseFloat(c("step"))), c("min") && (n.options.min = parseFloat(c("min"))), c("max") && (n.options.max = parseFloat(c("max"))), n.value = parseFloat(n.inputElement.value.replace(/[^\d.]/g, "")), s(), r(), KTUtil.data(n.element).set("dialer", n)
            },
            r = function() {
                KTUtil.addEvent(n.incElement, "click", (function(e) {
                    e.preventDefault(), o()
                })), KTUtil.addEvent(n.decElement, "click", (function(e) {
                    e.preventDefault(), l()
                })), KTUtil.addEvent(n.inputElement, "change", (function(e) {
                    e.preventDefault(), s()
                }))
            },
            o = function() {
                return KTEventHandler.trigger(n.element, "kt.dialer.increase", n), n.inputElement.value = n.value + n.options.step, s(), KTEventHandler.trigger(n.element, "kt.dialer.increased", n), n
            },
            l = function() {
                return KTEventHandler.trigger(n.element, "kt.dialer.decrease", n), n.inputElement.value = n.value - n.options.step, s(), KTEventHandler.trigger(n.element, "kt.dialer.decreased", n), n
            },
            s = function() {
                KTEventHandler.trigger(n.element, "kt.dialer.change", n), n.value = parseFloat(n.inputElement.value.replace(/[^\d.]/g, "")), n.value < n.options.min && (n.value = n.options.min), n.value > n.options.max && (n.value = n.options.max), n.inputElement.value = u(n.value), KTEventHandler.trigger(n.element, "kt.dialer.changed", n)
            },
            u = function(e) {
                return n.options.prefix + parseFloat(e).toFixed(n.options.decimals) + n.options.suffix
            },
            c = function(e) {
                return !0 === n.element.hasAttribute("data-kt-dialer-" + e) ? n.element.getAttribute("data-kt-dialer-" + e) : null
            };
        !0 === KTUtil.data(e).has("dialer") ? n = KTUtil.data(e).get("dialer") : a(), n.increase = function() {
            return o()
        }, n.decrease = function() {
            return l()
        }, n.getElement = function() {
            return n.element
        }, n.on = function(e, t) {
            return KTEventHandler.on(n.element, e, t)
        }, n.one = function(e, t) {
            return KTEventHandler.one(n.element, e, t)
        }, n.off = function(e) {
            return KTEventHandler.off(n.element, e)
        }, n.trigger = function(e, t) {
            return KTEventHandler.trigger(n.element, e, t, n, t)
        }
    }
};
KTDialer.getInstance = function(e) {
    return null !== e && KTUtil.data(e).has("dialer") ? KTUtil.data(e).get("dialer") : null
}, KTDialer.createInstances = function(e) {
    var t = document.body.querySelectorAll(e);
    if (t && t.length > 0)
        for (var n = 0, i = t.length; n < i; n++) new KTDialer(t[n])
}, KTDialer.init = function() {
    KTDialer.createInstances('[data-kt-dialer="true"]')
}, "loading" === document.readyState ? document.addEventListener("DOMContentLoaded", KTDialer.init) : KTDialer.init(), "undefined" != typeof module && void 0 !== module.exports && (module.exports = KTDialer);
var KTDrawer = function(e, t) {
    var n = this,
        i = document.getElementsByTagName("BODY")[0];
    if (null != e) {
        var a = {
                overlay: !0,
                direction: "end",
                baseClass: "drawer",
                overlayClass: "drawer-overlay"
            },
            r = function() {
                n.options = KTUtil.deepExtend({}, a, t), n.uid = KTUtil.getUniqueId("drawer"), n.element = e, n.overlayElement = null, n.name = n.element.getAttribute("data-kt-drawer-name"), n.shown = !1, n.lastWidth, n.toggleElement = null, o(), c(), KTUtil.data(n.element).set("drawer", n)
            },
            o = function() {
                var e = p("toggle"),
                    t = p("close");
                null !== e && e.length > 0 && KTUtil.on(i, e, "click", (function(e) {
                    e.preventDefault(), n.toggleElement = this, l()
                })), null !== t && t.length > 0 && KTUtil.on(i, t, "click", (function(e) {
                    e.preventDefault(), n.closeElement = this, s()
                }))
            },
            l = function() {
                !1 !== KTEventHandler.trigger(n.element, "kt.drawer.toggle", n) && (!0 === n.shown ? s() : u(), KTEventHandler.trigger(n.element, "kt.drawer.toggled", n))
            },
            s = function() {
                !1 !== KTEventHandler.trigger(n.element, "kt.drawer.hide", n) && (n.shown = !1, m(), i.removeAttribute("data-kt-drawer-" + n.name, "on"), i.removeAttribute("data-kt-drawer"), KTUtil.removeClass(n.element, n.options.baseClass + "-on"), null !== n.toggleElement && KTUtil.removeClass(n.toggleElement, "active"), KTEventHandler.trigger(n.element, "kt.drawer.after.hidden", n))
            },
            u = function() {
                !1 !== KTEventHandler.trigger(n.element, "kt.drawer.show", n) && (n.shown = !0, d(), i.setAttribute("data-kt-drawer-" + n.name, "on"), i.setAttribute("data-kt-drawer", "on"), KTUtil.addClass(n.element, n.options.baseClass + "-on"), null !== n.toggleElement && KTUtil.addClass(n.toggleElement, "active"), KTEventHandler.trigger(n.element, "kt.drawer.shown", n))
            },
            c = function() {
                var e = f(),
                    t = p("direction");
                !0 === KTUtil.hasClass(n.element, n.options.baseClass + "-on") && "on" === String(i.getAttribute("data-kt-drawer-" + n.name + "-")) ? n.shown = !0 : n.shown = !1, !0 === p("activate") ? (KTUtil.addClass(n.element, n.options.baseClass), KTUtil.addClass(n.element, n.options.baseClass + "-" + t), KTUtil.css(n.element, "width", e, !0), n.lastWidth = e) : (KTUtil.css(n.element, "width", ""), KTUtil.removeClass(n.element, n.options.baseClass), KTUtil.removeClass(n.element, n.options.baseClass + "-" + t), s())
            },
            d = function() {
                !0 === p("overlay") && (n.overlayElement = document.createElement("DIV"), KTUtil.css(n.overlayElement, "z-index", KTUtil.css(n.element, "z-index") - 1), i.append(n.overlayElement), KTUtil.addClass(n.overlayElement, p("overlay-class")), KTUtil.addEvent(n.overlayElement, "click", (function(e) {
                    e.preventDefault(), s()
                })))
            },
            m = function() {
                null !== n.overlayElement && KTUtil.remove(n.overlayElement)
            },
            p = function(e) {
                if (!0 === n.element.hasAttribute("data-kt-drawer-" + e)) {
                    var t = n.element.getAttribute("data-kt-drawer-" + e),
                        i = KTUtil.getResponsiveValue(t);
                    return null !== i && "true" === String(i) ? i = !0 : null !== i && "false" === String(i) && (i = !1), i
                }
                var a = KTUtil.snakeToCamel(e);
                return n.options[a] ? KTUtil.getResponsiveValue(n.options[a]) : null
            },
            f = function() {
                var e = p("width");
                return "auto" === e && (e = KTUtil.css(n.element, "width")), e
            };
        KTUtil.data(e).has("drawer") ? n = KTUtil.data(e).get("drawer") : r(), n.toggle = function() {
            return l()
        }, n.show = function() {
            return u()
        }, n.hide = function() {
            return s()
        }, n.isShown = function() {
            return n.shown
        }, n.update = function() {
            c()
        }, n.goElement = function() {
            return n.element
        }, n.on = function(e, t) {
            return KTEventHandler.on(n.element, e, t)
        }, n.one = function(e, t) {
            return KTEventHandler.one(n.element, e, t)
        }, n.off = function(e) {
            return KTEventHandler.off(n.element, e)
        }, n.trigger = function(e, t) {
            return KTEventHandler.trigger(n.element, e, t, n, t)
        }
    }
};
KTDrawer.getInstance = function(e) {
    return null !== e && KTUtil.data(e).has("drawer") ? KTUtil.data(e).get("drawer") : null
}, KTDrawer.createInstances = function(e) {
    var t = document.getElementsByTagName("BODY")[0].querySelectorAll(e);
    if (t && t.length > 0)
        for (var n = 0, i = t.length; n < i; n++) new KTDrawer(t[n])
}, KTDrawer.handleToggle = function() {
    KTUtil.on(document.body, '[data-kt-drawer-toggle="true"][data-kt-drawer-target]', "click", (function(e) {
        var t = document.querySelector(this.getAttribute("data-kt-drawer-target"));
        t && KTDrawer.getInstance(t).show()
    }))
}, KTDrawer.handleDismiss = function() {
    KTUtil.on(document.body, '[data-kt-drawer-dismiss="true"]', "click", (function(e) {
        var t = this.closest('[data-kt-drawer="true"]');
        if (t) {
            var n = KTDrawer.getInstance(t);
            n.isShown() && n.hide()
        }
    }))
}, window.addEventListener("resize", (function() {
    var e = document.getElementsByTagName("BODY")[0];
    KTUtil.throttle(undefined, (function() {
        var t = e.querySelectorAll('[data-kt-drawer="true"]');
        if (t && t.length > 0)
            for (var n = 0, i = t.length; n < i; n++) KTDrawer.getInstance(t[n]).update()
    }), 200)
})), KTDrawer.init = function() {
    KTDrawer.createInstances('[data-kt-drawer="true"]'), KTDrawer.handleToggle(), KTDrawer.handleDismiss()
}, "loading" === document.readyState ? document.addEventListener("DOMContentLoaded", KTDrawer.init) : KTDrawer.init(), "undefined" != typeof module && void 0 !== module.exports && (module.exports = KTDrawer);
var KTEventHandler = function() {
    var e = {},
        t = function(t, n, i, a) {
            var r = KTUtil.getUniqueId("event");
            KTUtil.data(t).set(n, r), e[n] || (e[n] = {}), e[n][r] = {
                name: n,
                callback: i,
                one: a,
                fired: !1
            }
        };
    return {
        trigger: function(t, n, i, a) {
            return function(t, n, i, a) {
                if (!0 === KTUtil.data(t).has(n)) {
                    var r = KTUtil.data(t).get(n);
                    if (e[n] && e[n][r]) {
                        var o = e[n][r];
                        if (o.name === n) {
                            if (1 != o.one) return o.callback.call(this, i, a);
                            if (0 == o.fired) return e[n][r].fired = !0, o.callback.call(this, i, a)
                        }
                    }
                }
                return null
            }(t, n, i, a)
        },
        on: function(e, n, i) {
            return t(e, n, i)
        },
        one: function(e, n, i) {
            return t(e, n, i, !0)
        },
        off: function(t, n) {
            return function(t, n) {
                var i = KTUtil.data(t).get(n);
                e[n] && e[n][i] && delete e[n][i]
            }(t, n)
        },
        debug: function() {
            for (var t in e) e.hasOwnProperty(t) && console.log(t)
        }
    }
}();
"undefined" != typeof module && void 0 !== module.exports && (module.exports = KTEventHandler);
var KTFeedback = function(e) {
    var t = this,
        n = document.getElementsByTagName("BODY")[0],
        i = {
            width: 100,
            placement: "top-center",
            content: "",
            type: "popup"
        },
        a = function() {
            t.options = KTUtil.deepExtend({}, i, e), t.uid = KTUtil.getUniqueId("feedback"), t.element, t.shown = !1, r(), KTUtil.data(t.element).set("feedback", t)
        },
        r = function() {
            KTUtil.addEvent(t.element, "click", (function(e) {
                e.preventDefault(), _go()
            }))
        },
        o = function() {
            t.element = document.createElement("DIV"), KTUtil.addClass(t.element, "feedback feedback-popup"), KTUtil.setHTML(t.element, t.options.content), "top-center" == t.options.placement && l(), n.appendChild(t.element), KTUtil.addClass(t.element, "feedback-shown"), t.shown = !0
        },
        l = function() {
            var e = KTUtil.getResponsiveValue(t.options.width),
                n = KTUtil.css(t.element, "height");
            KTUtil.addClass(t.element, "feedback-top-center"), KTUtil.css(t.element, "width", e), KTUtil.css(t.element, "left", "50%"), KTUtil.css(t.element, "top", "-" + n)
        },
        s = function() {
            t.element.remove()
        };
    a(), t.show = function() {
        return function() {
            if (!1 !== KTEventHandler.trigger(t.element, "kt.feedback.show", t)) return "popup" === t.options.type && o(), KTEventHandler.trigger(t.element, "kt.feedback.shown", t), t
        }()
    }, t.hide = function() {
        return function() {
            if (!1 !== KTEventHandler.trigger(t.element, "kt.feedback.hide", t)) return "popup" === t.options.type && s(), t.shown = !1, KTEventHandler.trigger(t.element, "kt.feedback.hidden", t), t
        }()
    }, t.isShown = function() {
        return t.shown
    }, t.getElement = function() {
        return t.element
    }, t.on = function(e, n) {
        return KTEventHandler.on(t.element, e, n)
    }, t.one = function(e, n) {
        return KTEventHandler.one(t.element, e, n)
    }, t.off = function(e) {
        return KTEventHandler.off(t.element, e)
    }, t.trigger = function(e, n) {
        return KTEventHandler.trigger(t.element, e, n, t, n)
    }
};
"undefined" != typeof module && void 0 !== module.exports && (module.exports = KTFeedback);
var KTImageInput = function(e, t) {
    var n = this;
    if (null != e) {
        var i = {},
            a = function() {
                n.options = KTUtil.deepExtend({}, i, t), n.uid = KTUtil.getUniqueId("image-input"), n.element = e, n.inputElement = KTUtil.find(e, 'input[type="file"]'), n.wrapperElement = KTUtil.find(e, ".image-input-wrapper"), n.cancelElement = KTUtil.find(e, '[data-kt-image-input-action="cancel"]'), n.removeElement = KTUtil.find(e, '[data-kt-image-input-action="remove"]'), n.hiddenElement = KTUtil.find(e, 'input[type="hidden"]'), n.src = KTUtil.css(n.wrapperElement, "backgroundImage"), r(), KTUtil.data(n.element).set("image-input", n)
            },
            r = function() {
                KTUtil.addEvent(n.inputElement, "change", o), KTUtil.addEvent(n.cancelElement, "click", l), KTUtil.addEvent(n.removeElement, "click", s)
            },
            o = function(e) {
                if (e.preventDefault(), null !== n.inputElement && n.inputElement.files && n.inputElement.files[0]) {
                    if (!1 === KTEventHandler.trigger(n.element, "kt.imageinput.change", n)) return;
                    var t = new FileReader;
                    t.onload = function(e) {
                        KTUtil.css(n.wrapperElement, "background-image", "url(" + e.target.result + ")")
                    }, t.readAsDataURL(n.inputElement.files[0]), KTUtil.addClass(n.element, "image-input-changed"), KTUtil.removeClass(n.element, "image-input-empty"), KTEventHandler.trigger(n.element, "kt.imageinput.changed", n)
                }
            },
            l = function(e) {
                e.preventDefault(), !1 !== KTEventHandler.trigger(n.element, "kt.imageinput.cancel", n) && (KTUtil.removeClass(n.element, "image-input-changed"), KTUtil.removeClass(n.element, "image-input-empty"), KTUtil.css(n.wrapperElement, "background-image", n.src), n.inputElement.value = "", null !== n.hiddenElement && (n.hiddenElement.value = "0"), KTEventHandler.trigger(n.element, "kt.imageinput.canceled", n))
            },
            s = function(e) {
                e.preventDefault(), !1 !== KTEventHandler.trigger(n.element, "kt.imageinput.remove", n) && (KTUtil.removeClass(n.element, "image-input-changed"), KTUtil.addClass(n.element, "image-input-empty"), KTUtil.css(n.wrapperElement, "background-image", "none"), n.inputElement.value = "", null !== n.hiddenElement && (n.hiddenElement.value = "1"), KTEventHandler.trigger(n.element, "kt.imageinput.removed", n))
            };
        !0 === KTUtil.data(e).has("image-input") ? n = KTUtil.data(e).get("image-input") : a(), n.getInputElement = function() {
            return n.inputElement
        }, n.goElement = function() {
            return n.element
        }, n.on = function(e, t) {
            return KTEventHandler.on(n.element, e, t)
        }, n.one = function(e, t) {
            return KTEventHandler.one(n.element, e, t)
        }, n.off = function(e) {
            return KTEventHandler.off(n.element, e)
        }, n.trigger = function(e, t) {
            return KTEventHandler.trigger(n.element, e, t, n, t)
        }
    }
};
KTImageInput.getInstance = function(e) {
    return null !== e && KTUtil.data(e).has("image-input") ? KTUtil.data(e).get("image-input") : null
}, KTImageInput.createInstances = function(e) {
    var t = document.querySelectorAll(e);
    if (t && t.length > 0)
        for (var n = 0, i = t.length; n < i; n++) new KTImageInput(t[n])
}, KTImageInput.init = function() {
    KTImageInput.createInstances("[data-kt-image-input]")
}, "loading" === document.readyState ? document.addEventListener("DOMContentLoaded", KTImageInput.init) : KTImageInput.init(), "undefined" != typeof module && void 0 !== module.exports && (module.exports = KTImageInput);
var KTMenu = function(e, t) {
    var n = this;
    if (null != e) {
        var i = {
                dropdown: {
                    hoverTimeout: 200,
                    zindex: 105
                },
                accordion: {
                    slideSpeed: 250,
                    expand: !1
                }
            },
            a = function() {
                n.options = KTUtil.deepExtend({}, i, t), n.uid = KTUtil.getUniqueId("menu"), n.element = e, n.triggerElement, c(), u(), KTUtil.data(n.element).set("menu", n)
            },
            r = function(e) {
                null !== e && (!0 === m(e) ? l(e) : o(e))
            },
            o = function(e) {
                null !== e && !0 !== m(e) && ("dropdown" === v(e) ? w(e) : "accordion" === v(e) && S(e), KTUtil.data(e).set("type", v(e)))
            },
            l = function(e) {
                null !== e && !1 !== m(e) && ("dropdown" === v(e) ? U(e) : "accordion" === v(e) && x(e))
            },
            s = function(e) {
                if (!1 !== p(e)) {
                    var t = g(e);
                    KTUtil.data(e).has("type") && KTUtil.data(e).get("type") !== v(e) && (KTUtil.removeClass(e, "hover"), KTUtil.removeClass(e, "show"), KTUtil.removeClass(t, "show"))
                }
            },
            u = function() {
                var e = n.element.querySelectorAll(".menu-item[data-kt-menu-trigger]");
                if (e && e.length > 0)
                    for (var t = 0, i = e.length; t < i; t++) s(e[t])
            },
            c = function() {
                var e = document.querySelector('[data-kt-menu-target="# ' + n.element.getAttribute("id") + '"]');
                null !== e ? n.triggerElement = e : n.element.closest("[data-kt-menu-trigger]") ? n.triggerElement = n.element.closest("[data-kt-menu-trigger]") : n.element.parentNode && KTUtil.child(n.element.parentNode, "[data-kt-menu-trigger]") && (n.triggerElement = KTUtil.child(n.element.parentNode, "[data-kt-menu-trigger]")), n.triggerElement && KTUtil.data(n.triggerElement).set("menu", n)
            },
            d = function(e) {
                return n.triggerElement === e
            },
            m = function(e) {
                var t = g(e);
                return null !== t && ("dropdown" === v(e) ? !0 === KTUtil.hasClass(t, "show") && !0 === t.hasAttribute("data-popper-placement") : KTUtil.hasClass(e, "show"))
            },
            p = function(e) {
                return KTUtil.hasClass(e, "menu-item") && e.hasAttribute("data-kt-menu-trigger")
            },
            f = function(e) {
                return KTUtil.child(e, ".menu-link")
            },
            g = function(e) {
                return !0 === d(e) ? n.element : !0 === e.classList.contains("menu-sub") ? e : KTUtil.data(e).has("sub") ? KTUtil.data(e).get("sub") : KTUtil.child(e, ".menu-sub")
            },
            v = function(e) {
                var t = g(e);
                return t && parseInt(KTUtil.css(t, "z-index")) > 0 ? "dropdown" : "accordion"
            },
            T = function(e) {
                var t, n;
                return d(e) || e.hasAttribute("data-kt-menu-trigger") ? e : KTUtil.data(e).has("item") ? KTUtil.data(e).get("item") : (t = e.closest(".menu-item[data-kt-menu-trigger]")) ? t : (n = e.closest(".menu-sub")) && !0 === KTUtil.data(n).has("item") ? KTUtil.data(n).get("item") : void 0
            },
            h = function(e) {
                var t, n = e.closest(".menu-sub");
                return KTUtil.data(n).has("item") ? KTUtil.data(n).get("item") : n && (t = n.closest(".menu-item[data-kt-menu-trigger]")) ? t : null
            },
            K = function(e) {
                var t = e;
                return KTUtil.data(e).get("sub") && (t = KTUtil.data(e).get("sub")), null !== t && t.querySelector(".menu-item[data-kt-menu-trigger]") || null
            },
            b = function(e) {
                var t, n = [],
                    i = 0;
                do {
                    (t = K(e)) && (n.push(t), e = t), i++
                } while (null !== t && i < 20);
                return n
            },
            w = function(e) {
                if (!1 !== KTEventHandler.trigger(n.element, "kt.menu.dropdown.show", e)) {
                    KTMenu.hideDropdowns(e);
                    d(e) || f(e);
                    var t = g(e),
                        i = C(e, "width"),
                        a = C(e, "height"),
                        r = n.options.dropdown.zindex,
                        o = KTUtil.getHighestZindex(e);
                    null !== o && o >= r && (r = o + 1), r > 0 && KTUtil.css(t, "z-index", r), null !== i && KTUtil.css(t, "width", i), null !== a && KTUtil.css(t, "height", a), KTUtil.css(t, "display", ""), KTUtil.css(t, "overflow", ""), E(e, t), KTUtil.addClass(e, "show"), KTUtil.addClass(e, "menu-dropdown"), KTUtil.addClass(t, "show"), !0 === C(e, "overflow") ? (document.body.appendChild(t), KTUtil.data(e).set("sub", t), KTUtil.data(t).set("item", e), KTUtil.data(t).set("menu", n)) : KTUtil.data(t).set("item", e), KTEventHandler.trigger(n.element, "kt.menu.dropdown.shown", e)
                }
            },
            U = function(e) {
                if (!1 !== KTEventHandler.trigger(n.element, "kt.menu.dropdown.hide", e)) {
                    var t = g(e);
                    KTUtil.css(t, "z-index", ""), KTUtil.css(t, "width", ""), KTUtil.css(t, "height", ""), KTUtil.removeClass(e, "show"), KTUtil.removeClass(e, "menu-dropdown"), KTUtil.removeClass(t, "show"), !0 === C(e, "overflow") && (e.classList.contains("menu-item") ? e.appendChild(t) : KTUtil.insertAfter(n.element, e), KTUtil.data(e).remove("sub"), KTUtil.data(t).remove("item"), KTUtil.data(t).remove("menu")), y(e), KTEventHandler.trigger(n.element, "kt.menu.dropdown.hidden", e)
                }
            },
            E = function(e, t) {
                var n, i = C(e, "attach");
                n = i ? "parent" === i ? e.parentNode : document.querySelector(i) : e;
                var a = Popper.createPopper(n, t, k(e));
                KTUtil.data(e).set("popper", a)
            },
            y = function(e) {
                !0 === KTUtil.data(e).has("popper") && (KTUtil.data(e).get("popper").destroy(), KTUtil.data(e).remove("popper"))
            },
            k = function(e) {
                var t = C(e, "placement");
                t || (t = "right");
                var n = C(e, "flip"),
                    i = n ? n.split(",") : [],
                    a = C(e, "offset"),
                    r = a ? a.split(",") : [];
                return {
                    placement: t,
                    strategy: !0 === C(e, "overflow") ? "absolute" : "fixed",
                    modifiers: [{
                        name: "offset",
                        options: {
                            offset: r
                        }
                    }, {
                        name: "preventOverflow",
                        options: {
                            rootBoundary: "clippingParents"
                        }
                    }, {
                        name: "flip",
                        options: {
                            altBoundary: !0,
                            fallbackPlacements: i
                        }
                    }]
                }
            },
            S = function(e) {
                if (!1 !== KTEventHandler.trigger(n.element, "kt.menu.accordion.show", e)) {
                    !1 === n.options.accordion.expand && A(e);
                    var t = g(e);
                    !0 === KTUtil.data(e).has("popper") && U(e), KTUtil.addClass(e, "hover"), KTUtil.addClass(e, "showing"), KTUtil.slideDown(t, n.options.accordion.slideSpeed, (function() {
                        KTUtil.removeClass(e, "showing"), KTUtil.addClass(e, "show"), KTUtil.addClass(t, "show"), KTEventHandler.trigger(n.element, "kt.menu.accordion.shown", e)
                    }))
                }
            },
            x = function(e) {
                if (!1 !== KTEventHandler.trigger(n.element, "kt.menu.accordion.hide", e)) {
                    var t = g(e);
                    KTUtil.addClass(e, "hiding"), KTUtil.slideUp(t, n.options.accordion.slideSpeed, (function() {
                        KTUtil.removeClass(e, "hiding"), KTUtil.removeClass(e, "show"), KTUtil.removeClass(t, "show"), KTUtil.removeClass(e, "hover"), KTEventHandler.trigger(n.element, "kt.menu.accordion.hidden", e)
                    }))
                }
            },
            A = function(e) {
                var t, i = KTUtil.findAll(n.element, ".show[data-kt-menu-trigger]");
                if (i && i.length > 0)
                    for (var a = 0, r = i.length; a < r; a++) t = i[a], "accordion" === v(t) && t !== e && !1 === e.contains(t) && !1 === t.contains(e) && x(t)
            },
            C = function(e, t) {
                var n, i = null;
                return e && e.hasAttribute("data-kt-menu-" + t) && (n = e.getAttribute("data-kt-menu-" + t), null !== (i = KTUtil.getResponsiveValue(n)) && "true" === String(i) ? i = !0 : null !== i && "false" === String(i) && (i = !1)), i
            };
        !0 === KTUtil.data(e).has("menu") ? n = KTUtil.data(e).get("menu") : a(), n.click = function(e, t) {
            return function(e, t) {
                t.preventDefault();
                var n = T(e);
                "click" === C(n, "trigger") && (!1 === C(n, "toggle") ? o(n) : r(n))
            }(e, t)
        }, n.link = function(e, t) {
            !1 !== KTEventHandler.trigger(n.element, "kt.menu.link.click", n) && (KTMenu.hideDropdowns(), KTEventHandler.trigger(n.element, "kt.menu.link.clicked", n))
        }, n.dismiss = function(e, t) {
            return function(e, t) {
                var n = T(e),
                    i = b(n);
                if (null !== n && "dropdown" === v(n) && (l(n), i.length > 0))
                    for (var a = 0, r = i.length; a < r; a++) null !== i[a] && "dropdown" === v(i[a]) && l(tems[a])
            }(e)
        }, n.mouseover = function(e, t) {
            return function(e, t) {
                var n = T(e);
                null !== n && "hover" === C(n, "trigger") && ("1" === KTUtil.data(n).get("hover") && (clearTimeout(KTUtil.data(n).get("timeout")), KTUtil.data(n).remove("hover"), KTUtil.data(n).remove("timeout")), o(n))
            }(e)
        }, n.mouseout = function(e, t) {
            return function(e, t) {
                var i = T(e);
                if (null !== i && "hover" === C(i, "trigger")) {
                    var a = setTimeout((function() {
                        "1" === KTUtil.data(i).get("hover") && l(i)
                    }), n.options.dropdown.hoverTimeout);
                    KTUtil.data(i).set("hover", "1"), KTUtil.data(i).set("timeout", a)
                }
            }(e)
        }, n.getItemTriggerType = function(e) {
            return C(e, "trigger")
        }, n.getItemSubType = function(e) {
            return v(e)
        }, n.show = function(e) {
            return o(e)
        }, n.hide = function(e) {
            return l(e)
        }, n.reset = function(e) {
            return s(e)
        }, n.update = function() {
            return u()
        }, n.getElement = function() {
            return n.element
        }, n.getItemLinkElement = function(e) {
            return f(e)
        }, n.getItemToggleElement = function(e) {
            return function(e) {
                return n.triggerElement ? n.triggerElement : f(e)
            }(e)
        }, n.getItemSubElement = function(e) {
            return g(e)
        }, n.getItemParentElements = function(e) {
            return function(e) {
                var t, i = [],
                    a = 0;
                do {
                    (t = h(e)) && (i.push(t), e = t), a++
                } while (null !== t && a < 20);
                return n.triggerElement && i.unshift(n.triggerElement), i
            }(e)
        }, n.isItemSubShown = function(e) {
            return m(e)
        }, n.isItemParentShown = function(e) {
            return function(e) {
                return KTUtil.parents(e, ".menu-item.show").length > 0
            }(e)
        }, n.getTriggerElement = function() {
            return n.triggerElement
        }, n.isItemDropdownPermanent = function(e) {
            return function(e) {
                return !0 === C(e, "permanent")
            }(e)
        }, n.hideAccordions = function(e) {
            return A(e)
        }, n.on = function(e, t) {
            return KTEventHandler.on(n.element, e, t)
        }, n.one = function(e, t) {
            return KTEventHandler.one(n.element, e, t)
        }, n.off = function(e) {
            return KTEventHandler.off(n.element, e)
        }
    }
};
KTMenu.getInstance = function(e) {
    var t;
    if (KTUtil.data(e).has("menu")) return KTUtil.data(e).get("menu");
    if ((t = e.closest(".menu")) && KTUtil.data(t).has("menu")) return KTUtil.data(t).get("menu");
    if (KTUtil.hasClass(e, "menu-link")) {
        var n = e.closest(".menu-sub");
        if (KTUtil.data(n).has("menu")) return KTUtil.data(n).get("menu")
    }
    return null
}, KTMenu.hideDropdowns = function(e) {
    var t = document.querySelectorAll(".show.menu-dropdown[data-kt-menu-trigger]");
    if (t && t.length > 0)
        for (var n = 0, i = t.length; n < i; n++) {
            var a = t[n],
                r = KTMenu.getInstance(a);
            r && "dropdown" === r.getItemSubType(a) && (e ? !1 === r.getItemSubElement(a).contains(e) && !1 === a.contains(e) && a !== e && r.hide(a) : r.hide(a))
        }
}, KTMenu.updateDropdowns = function() {
    var e = document.querySelectorAll(".show.menu-dropdown[data-kt-menu-trigger]");
    if (e && e.length > 0)
        for (var t = 0, n = e.length; t < n; t++) {
            var i = e[t];
            KTUtil.data(i).has("popper") && KTUtil.data(i).get("popper").forceUpdate()
        }
}, KTMenu.initGlobalHandlers = function() {
    document.addEventListener("click", (function(e) {
        var t, n, i, a = document.querySelectorAll(".show.menu-dropdown[data-kt-menu-trigger]");
        if (a && a.length > 0)
            for (var r = 0, o = a.length; r < o; r++)
                if (t = a[r], (i = KTMenu.getInstance(t)) && "dropdown" === i.getItemSubType(t)) {
                    if (i.getElement(), n = i.getItemSubElement(t), t === e.target || t.contains(e.target)) continue;
                    if (n === e.target || n.contains(e.target)) continue;
                    i.hide(t)
                }
    })), KTUtil.on(document.body, '.menu-item[data-kt-menu-trigger] > .menu-link, [data-kt-menu-trigger]:not(.menu-item):not([data-kt-menu-trigger="auto"])', "click", (function(e) {
        var t = KTMenu.getInstance(this);
        if (null !== t) return t.click(this, e)
    })), KTUtil.on(document.body, ".menu-item:not([data-kt-menu-trigger]) > .menu-link", "click", (function(e) {
        var t = KTMenu.getInstance(this);
        if (null !== t) return t.link(this, e)
    })), KTUtil.on(document.body, '[data-kt-menu-dismiss="true"]', "click", (function(e) {
        var t = KTMenu.getInstance(this);
        if (null !== t) return t.dismiss(this, e)
    })), KTUtil.on(document.body, "[data-kt-menu-trigger], .menu-sub", "mouseover", (function(e) {
        var t = KTMenu.getInstance(this);
        if (null !== t && "dropdown" === t.getItemSubType(this)) return t.mouseover(this, e)
    })), KTUtil.on(document.body, "[data-kt-menu-trigger], .menu-sub", "mouseout", (function(e) {
        var t = KTMenu.getInstance(this);
        if (null !== t && "dropdown" === t.getItemSubType(this)) return t.mouseout(this, e)
    })), window.addEventListener("resize", (function() {
        var e;
        KTUtil.throttle(undefined, (function() {
            var t = document.querySelectorAll('[data-kt-menu="true"]');
            if (t && t.length > 0)
                for (var n = 0, i = t.length; n < i; n++)(e = KTMenu.getInstance(t[n])) && e.update()
        }), 200)
    }))
}, KTMenu.createInstances = function(e) {
    var t = document.querySelectorAll(e);
    if (t && t.length > 0)
        for (var n = 0, i = t.length; n < i; n++) new KTMenu(t[n])
}, KTMenu.init = function() {
    KTMenu.initGlobalHandlers(), KTMenu.createInstances('[data-kt-menu="true"]')
}, "loading" === document.readyState ? document.addEventListener("DOMContentLoaded", KTMenu.init) : KTMenu.init(), "undefined" != typeof module && void 0 !== module.exports && (module.exports = KTMenu);
var KTPasswordMeter = function(e, t) {
    var n = this;
    if (e) {
        var i = {
                minLength: 8,
                checkUppercase: !0,
                checkLowercase: !0,
                checkDigit: !0,
                checkChar: !0,
                scoreHighlightClass: "active"
            },
            a = function() {
                n.options = KTUtil.deepExtend({}, i, t), n.score = 0, n.checkSteps = 5, n.element = e, n.inputElement = n.element.querySelector("input[type]"), n.visibilityElement = n.element.querySelector('[data-kt-password-meter-control="visibility"]'), n.highlightElement = n.element.querySelector('[data-kt-password-meter-control="highlight"]'), r(), KTUtil.data(n.element).set("password-meter", n)
            },
            r = function() {
                n.inputElement.addEventListener("input", (function() {
                    o()
                })), n.visibilityElement && n.visibilityElement.addEventListener("click", (function() {
                    f()
                }))
            },
            o = function() {
                var e = 0,
                    t = m();
                !0 === l() && (e += t), !0 === n.options.checkUppercase && !0 === s() && (e += t), !0 === n.options.checkLowercase && !0 === u() && (e += t), !0 === n.options.checkDigit && !0 === c() && (e += t), !0 === n.options.checkChar && !0 === d() && (e += t), n.score = e, p()
            },
            l = function() {
                return n.inputElement.value.length >= n.options.minLength
            },
            s = function() {
                return /[a-z]/.test(n.inputElement.value)
            },
            u = function() {
                return /[A-Z]/.test(n.inputElement.value)
            },
            c = function() {
                return /[0-9]/.test(n.inputElement.value)
            },
            d = function() {
                return /[~`!#$%\^&*+=\-\[\]\\';,/{}|\\":<>\?]/g.test(n.inputElement.value)
            },
            m = function() {
                var e = 1;
                return !0 === n.options.checkUppercase && e++, !0 === n.options.checkLowercase && e++, !0 === n.options.checkDigit && e++, !0 === n.options.checkChar && e++, n.checkSteps = e, 100 / n.checkSteps
            },
            p = function() {
                var e = [].slice.call(n.highlightElement.querySelectorAll("div")),
                    t = e.length,
                    i = 0,
                    a = m(),
                    r = g();
                e.map((function(e) {
                    i++, a * i * (n.checkSteps / t) <= r ? e.classList.add("active") : e.classList.remove("active")
                }))
            },
            f = function() {
                var e = n.visibilityElement.querySelector("i:not(.d-none), .svg-icon:not(.d-none)"),
                    t = n.visibilityElement.querySelector("i.d-none, .svg-icon.d-none");
                "password" === n.inputElement.getAttribute("type").toLowerCase() ? n.inputElement.setAttribute("type", "text") : n.inputElement.setAttribute("type", "password"), e.classList.add("d-none"), t.classList.remove("d-none"), n.inputElement.focus()
            },
            g = function() {
                return n.score
            };
        !0 === KTUtil.data(e).has("password-meter") ? n = KTUtil.data(e).get("password-meter") : a(), n.check = function() {
            return o()
        }, n.getScore = function() {
            return g()
        }, n.reset = function() {
            return n.score = 0, void p()
        }
    }
};
KTPasswordMeter.getInstance = function(e) {
    return null !== e && KTUtil.data(e).has("password-meter") ? KTUtil.data(e).get("password-meter") : null
}, KTPasswordMeter.createInstances = function(e) {
    var t = document.body.querySelectorAll(e);
    if (t && t.length > 0)
        for (var n = 0, i = t.length; n < i; n++) new KTPasswordMeter(t[n])
}, KTPasswordMeter.init = function() {
    KTPasswordMeter.createInstances("[data-kt-password-meter]")
}, "loading" === document.readyState ? document.addEventListener("DOMContentLoaded", KTPasswordMeter.init) : KTPasswordMeter.init(), "undefined" != typeof module && void 0 !== module.exports && (module.exports = KTPasswordMeter);
var KTPlace = function(e, t) {
    var n = this;
    if (null != e) {
        var i = {
                mode: "append"
            },
            a = function() {
                n.element = e, n.options = KTUtil.deepExtend({}, i, t), r(), KTUtil.data(n.element).set("place", n)
            },
            r = function(t) {
                var n = o("parent"),
                    i = o("mode"),
                    a = n ? document.querySelector(n) : null;
                a && e.parentNode !== a && ("prepend" === i ? a.prepend(e) : "append" === i && a.append(e))
            },
            o = function(e) {
                if (!0 === n.element.hasAttribute("data-kt-place-" + e)) {
                    var t = n.element.getAttribute("data-kt-place-" + e),
                        i = KTUtil.getResponsiveValue(t);
                    return null !== i && "true" === String(i) ? i = !0 : null !== i && "false" === String(i) && (i = !1), i
                }
                var a = KTUtil.snakeToCamel(e);
                return n.options[a] ? KTUtil.getResponsiveValue(n.options[a]) : null
            };
        !0 === KTUtil.data(e).has("place") ? n = KTUtil.data(e).get("place") : a(), n.update = function() {
            r()
        }, n.on = function(e, t) {
            return KTEventHandler.on(n.element, e, t)
        }, n.one = function(e, t) {
            return KTEventHandler.one(n.element, e, t)
        }, n.off = function(e) {
            return KTEventHandler.off(n.element, e)
        }, n.trigger = function(e, t) {
            return KTEventHandler.trigger(n.element, e, t, n, t)
        }
    }
};
KTPlace.getInstance = function(e) {
    return null !== e && KTUtil.data(e).has("place") ? KTUtil.data(e).get("place") : null
}, KTPlace.createInstances = function(e) {
    var t = document.querySelectorAll(e);
    if (t && t.length > 0)
        for (var n = 0, i = t.length; n < i; n++) new KTPlace(t[n])
}, window.addEventListener("resize", (function() {
    KTUtil.throttle(undefined, (function() {
        var e = document.querySelectorAll('[data-kt-place="true"]');
        if (e && e.length > 0)
            for (var t = 0, n = e.length; t < n; t++) KTPlace.getInstance(e[t]).update()
    }), 200)
})), KTPlace.init = function() {
    KTPlace.createInstances('[data-kt-place="true"]')
}, "loading" === document.readyState ? document.addEventListener("DOMContentLoaded", KTPlace.init) : KTPlace.init(), "undefined" != typeof module && void 0 !== module.exports && (module.exports = KTPlace);
var KTScroll = function(e, t) {
    var n = this;
    document.getElementsByTagName("BODY")[0];
    if (e) {
        var i = {
                saveState: !0
            },
            a = function() {
                n.options = KTUtil.deepExtend({}, i, t), n.element = e, n.id = n.element.getAttribute("id"), o(), KTUtil.data(n.element).set("scroll", n)
            },
            r = function() {
                KTCookie.set(n.id + "st", n.element.scrollTop)
            },
            o = function() {
                var e, t;
                !0 === u("activate") || !1 === n.element.hasAttribute("data-kt-scroll-activate") ? (e = c(), null !== (t = l()) && t.length > 0 ? KTUtil.css(n.element, e, t) : KTUtil.css(n.element, e, ""), !0 === u("save-state") && void 0 !== KTCookie && n.id ? n.element.addEventListener("scroll", r) : n.element.removeEventListener("scroll", r), function() {
                    if (!0 === u("save-state") && void 0 !== KTCookie && n.id && KTCookie.get(n.id + "st")) {
                        var e = parseInt(KTCookie.get(n.id + "st"));
                        e > 0 && (n.element.scrollTop = e)
                    }
                }()) : (KTUtil.css(n.element, c(), ""), n.element.removeEventListener("scroll", r))
            },
            l = function() {
                var e = u(c());
                return e instanceof Function ? e.call() : null !== e && "string" == typeof e && "auto" === e.toLowerCase() ? s() : e
            },
            s = function() {
                var e, t = KTUtil.getViewPort().height,
                    i = u("dependencies"),
                    a = u("wrappers"),
                    r = u("offset");
                if (null !== i && ((e = document.querySelectorAll(i)) && e.length > 0))
                    for (var o = 0, l = e.length; o < l; o++) {
                        var s = e[o];
                        !1 !== KTUtil.visible(s) && (t -= parseInt(KTUtil.css(s, "height")), t -= parseInt(KTUtil.css(s, "margin-top")), t -= parseInt(KTUtil.css(s, "margin-bottom")), KTUtil.css(s, "border-top") && (t -= parseInt(KTUtil.css(s, "border-top"))), KTUtil.css(s, "border-bottom") && (t -= parseInt(KTUtil.css(s, "border-bottom"))))
                    }
                if (null !== a && ((e = document.querySelectorAll(a)) && e.length > 0))
                    for (o = 0, l = e.length; o < l; o++) {
                        s = e[o];
                        !1 !== KTUtil.visible(s) && (t -= parseInt(KTUtil.css(s, "margin-top")), t -= parseInt(KTUtil.css(s, "margin-bottom")), t -= parseInt(KTUtil.css(s, "padding-top")), t -= parseInt(KTUtil.css(s, "padding-bottom")), KTUtil.css(s, "border-top") && (t -= parseInt(KTUtil.css(s, "border-top"))), KTUtil.css(s, "border-bottom") && (t -= parseInt(KTUtil.css(s, "border-bottom"))))
                    }
                return null !== r && (t -= parseInt(r)), t -= parseInt(KTUtil.css(n.element, "margin-top")), t -= parseInt(KTUtil.css(n.element, "margin-bottom")), KTUtil.css(s, "border-top") && (t -= parseInt(KTUtil.css(s, "border-top"))), KTUtil.css(s, "border-bottom") && (t -= parseInt(KTUtil.css(s, "border-bottom"))), t = String(t) + "px"
            },
            u = function(e) {
                if (!0 === n.element.hasAttribute("data-kt-scroll-" + e)) {
                    var t = n.element.getAttribute("data-kt-scroll-" + e),
                        i = KTUtil.getResponsiveValue(t);
                    return null !== i && "true" === String(i) ? i = !0 : null !== i && "false" === String(i) && (i = !1), i
                }
                var a = KTUtil.snakeToCamel(e);
                return n.options[a] ? KTUtil.getResponsiveValue(n.options[a]) : null
            },
            c = function() {
                return u("height") ? "height" : u("min-height") ? "min-height" : u("max-height") ? "max-height" : void 0
            };
        KTUtil.data(e).has("scroll") ? n = KTUtil.data(e).get("scroll") : a(), n.update = function() {
            return o()
        }, n.getHeight = function() {
            return l()
        }, n.getElement = function() {
            return n.element
        }
    }
};
KTScroll.getInstance = function(e) {
    return null !== e && KTUtil.data(e).has("scroll") ? KTUtil.data(e).get("scroll") : null
}, KTScroll.createInstances = function(e) {
    var t = document.getElementsByTagName("BODY")[0].querySelectorAll(e);
    if (t && t.length > 0)
        for (var n = 0, i = t.length; n < i; n++) new KTScroll(t[n])
}, window.addEventListener("resize", (function() {
    var e = document.getElementsByTagName("BODY")[0];
    KTUtil.throttle(undefined, (function() {
        var t = e.querySelectorAll('[data-kt-scroll="true"]');
        if (t && t.length > 0)
            for (var n = 0, i = t.length; n < i; n++) KTScroll.getInstance(t[n]).update()
    }), 200)
})), KTScroll.init = function() {
    KTScroll.createInstances('[data-kt-scroll="true"]')
}, "loading" === document.readyState ? document.addEventListener("DOMContentLoaded", KTScroll.init) : KTScroll.init(), "undefined" != typeof module && void 0 !== module.exports && (module.exports = KTScroll);
var KTScrolltop = function(e, t) {
    var n = this,
        i = document.getElementsByTagName("BODY")[0];
    if (null != e) {
        var a = {
                offset: 300,
                speed: 600
            },
            r = function() {
                n.options = KTUtil.deepExtend({}, a, t), n.uid = KTUtil.getUniqueId("scrolltop"), n.element = e, o(), KTUtil.data(n.element).set("scrolltop", n)
            },
            o = function() {
                window.addEventListener("scroll", (function() {
                    KTUtil.throttle(undefined, (function() {
                        l()
                    }), 200)
                })), KTUtil.addEvent(n.element, "click", (function(e) {
                    e.preventDefault(), s()
                }))
            },
            l = function() {
                var e = parseInt(u("offset"));
                KTUtil.getScrollTop() > e ? !1 === i.hasAttribute("data-kt-scrolltop") && i.setAttribute("data-kt-scrolltop", "on") : !0 === i.hasAttribute("data-kt-scrolltop") && i.removeAttribute("data-kt-scrolltop")
            },
            s = function() {
                var e = parseInt(u("speed"));
                KTUtil.scrollTop(0, e)
            },
            u = function(e) {
                if (!0 === n.element.hasAttribute("data-kt-scrolltop-" + e)) {
                    var t = n.element.getAttribute("data-kt-scrolltop-" + e),
                        i = KTUtil.getResponsiveValue(t);
                    return null !== i && "true" === String(i) ? i = !0 : null !== i && "false" === String(i) && (i = !1), i
                }
                var a = KTUtil.snakeToCamel(e);
                return n.options[a] ? KTUtil.getResponsiveValue(n.options[a]) : null
            };
        KTUtil.data(e).has("scrolltop") ? n = KTUtil.data(e).get("scrolltop") : r(), n.go = function() {
            return s()
        }, n.getElement = function() {
            return n.element
        }
    }
};
KTScrolltop.getInstance = function(e) {
    return e && KTUtil.data(e).has("scrolltop") ? KTUtil.data(e).get("scrolltop") : null
}, KTScrolltop.createInstances = function(e) {
    var t = document.getElementsByTagName("BODY")[0].querySelectorAll(e);
    if (t && t.length > 0)
        for (var n = 0, i = t.length; n < i; n++) new KTScrolltop(t[n])
}, KTScrolltop.init = function() {
    KTScrolltop.createInstances('[data-kt-scrolltop="true"]')
}, "loading" === document.readyState ? document.addEventListener("DOMContentLoaded", KTScrolltop.init) : KTScrolltop.init(), "undefined" != typeof module && void 0 !== module.exports && (module.exports = KTScrolltop);
var KTSearch = function(e, t) {
    var n = this;
    if (e) {
        var i = {
                minLength: 2,
                keypress: !0,
                enter: !0,
                layout: "menu",
                responsive: null,
                showOnFocus: !0
            },
            a = function() {
                n.options = KTUtil.deepExtend({}, i, t), n.processing = !1, n.element = e, n.contentElement = v("content"), n.formElement = v("form"), n.inputElement = v("input"), n.spinnerElement = v("spinner"), n.clearElement = v("clear"), n.toggleElement = v("toggle"), n.submitElement = v("submit"), n.toolbarElement = v("toolbar"), n.resultsElement = v("results"), n.suggestionElement = v("suggestion"), n.emptyElement = v("empty"), n.layout = g("layout"), "menu" === n.layout ? n.menuObject = new KTMenu(n.contentElement) : n.menuObject = null, m(), r(), KTUtil.data(n.element).set("search", n)
            },
            r = function() {
                n.inputElement.addEventListener("focus", o), n.inputElement.addEventListener("blur", l), !0 === g("keypress") && n.inputElement.addEventListener("input", u), n.submitElement && n.submitElement.addEventListener("click", c), !0 === g("enter") && n.inputElement.addEventListener("keypress", s), n.clearElement && n.clearElement.addEventListener("click", d), n.menuObject && (n.toggleElement && (n.toggleElement.addEventListener("click", p), n.menuObject.on("kt.menu.dropdown.show", (function(e) {
                    KTUtil.visible(n.toggleElement) && (n.toggleElement.classList.add("active"), n.toggleElement.classList.add("show"))
                })), n.menuObject.on("kt.menu.dropdown.hide", (function(e) {
                    KTUtil.visible(n.toggleElement) && (n.toggleElement.classList.remove("active"), n.toggleElement.classList.remove("show"))
                }))), n.menuObject.on("kt.menu.dropdown.shown", (function() {
                    n.inputElement.focus()
                }))), window.addEventListener("resize", (function() {
                    KTUtil.throttle(undefined, (function() {
                        m()
                    }), 200)
                }))
            },
            o = function() {
                n.element.classList.add("focus"), (!0 === g("show-on-focus") || n.inputElement.value.length >= minLength) && p()
            },
            l = function() {
                n.element.classList.remove("focus")
            },
            s = function(e) {
                13 == (e.charCode || e.keyCode || 0) && (e.preventDefault(), c())
            },
            u = function() {
                if (g("min-length")) {
                    var e = parseInt(g("min-length"));
                    n.inputElement.value.length >= e ? c() : 0 === n.inputElement.value.length && d()
                }
            },
            c = function() {
                !1 === n.processing && (n.spinnerElement && n.spinnerElement.classList.remove("d-none"), n.clearElement && n.clearElement.classList.add("d-none"), n.toolbarElement && n.toolbarElement.classList.add("d-none"), n.inputElement.focus(), n.processing = !0, KTEventHandler.trigger(n.element, "kt.search.process", n))
            },
            d = function() {
                !1 !== KTEventHandler.trigger(n.element, "kt.search.clear", n) && (n.inputElement.value = "", n.inputElement.focus(), n.clearElement && n.clearElement.classList.add("d-none"), n.toolbarElement && n.toolbarElement.classList.remove("d-none"), !1 === g("show-on-focus") && f(), KTEventHandler.trigger(n.element, "kt.search.cleared", n))
            },
            m = function() {
                if ("menu" === n.layout) {
                    var e = T();
                    "on" === e && !1 === n.contentElement.contains(n.formElement) ? (n.contentElement.prepend(n.formElement), n.formElement.classList.remove("d-none")) : "off" === e && !0 === n.contentElement.contains(n.formElement) && (n.element.prepend(n.formElement), n.formElement.classList.add("d-none"))
                }
            },
            p = function() {
                n.menuObject && (m(), n.menuObject.show(n.element))
            },
            f = function() {
                n.menuObject && (m(), n.menuObject.hide(n.element))
            },
            g = function(e) {
                if (!0 === n.element.hasAttribute("data-kt-search-" + e)) {
                    var t = n.element.getAttribute("data-kt-search-" + e),
                        i = KTUtil.getResponsiveValue(t);
                    return null !== i && "true" === String(i) ? i = !0 : null !== i && "false" === String(i) && (i = !1), i
                }
                var a = KTUtil.snakeToCamel(e);
                return n.options[a] ? KTUtil.getResponsiveValue(n.options[a]) : null
            },
            v = function(e) {
                return n.element.querySelector('[data-kt-search-element="' + e + '"]')
            },
            T = function() {
                var e = g("responsive"),
                    t = KTUtil.getViewPort().width;
                if (!e) return null;
                var n = KTUtil.getBreakpoint(e);
                return n || (n = parseInt(e)), t < n ? "on" : "off"
            };
        !0 === KTUtil.data(e).has("search") ? n = KTUtil.data(e).get("search") : a(), n.show = function() {
            return p()
        }, n.hide = function() {
            return f()
        }, n.update = function() {
            return m()
        }, n.search = function() {
            return c()
        }, n.complete = function() {
            return n.spinnerElement && n.spinnerElement.classList.add("d-none"), n.clearElement && n.clearElement.classList.remove("d-none"), 0 === n.inputElement.value.length && d(), n.inputElement.focus(), p(), void(n.processing = !1)
        }, n.clear = function() {
            return d()
        }, n.isProcessing = function() {
            return n.processing
        }, n.getQuery = function() {
            return n.inputElement.value()
        }, n.getMenu = function() {
            return n.menuObject
        }, n.getFormElement = function() {
            return n.formElement
        }, n.getInputElement = function() {
            return n.inputElement
        }, n.getContentElement = function() {
            return n.contentElement
        }, n.getElement = function() {
            return n.element
        }, n.on = function(e, t) {
            return KTEventHandler.on(n.element, e, t)
        }, n.one = function(e, t) {
            return KTEventHandler.one(n.element, e, t)
        }, n.off = function(e) {
            return KTEventHandler.off(n.element, e)
        }
    }
};
KTSearch.getInstance = function(e) {
    return null !== e && KTUtil.data(e).has("search") ? KTUtil.data(e).get("search") : null
}, "undefined" != typeof module && void 0 !== module.exports && (module.exports = KTSearch);
var KTStepper = function(e, t) {
    var n = this;
    document.getElementsByTagName("BODY")[0];
    if (null != e) {
        var i = {
                startIndex: 1,
                animation: !1,
                animationSpeed: "0.3s",
                animationNextClass: "animate__animated animate__slideInRight animate__fast",
                animationPreviousClass: "animate__animated animate__slideInLeft animate__fast"
            },
            a = function() {
                n.options = KTUtil.deepExtend({}, i, t), n.uid = KTUtil.getUniqueId("stepper"), n.element = e, n.steps = KTUtil.findAll(n.element, '[data-kt-stepper-element="nav"]'), n.btnNext = KTUtil.find(n.element, '[data-kt-stepper-action="next"]'), n.btnPrevious = KTUtil.find(n.element, '[data-kt-stepper-action="previous"]'), n.btnSubmit = KTUtil.find(n.element, '[data-kt-stepper-action="submit"]'), n.totalStepsNumber = n.steps.length, n.passedStepIndex = 0, n.currentStepIndex = 1, n.options.startIndex > 1 && r(n.options.startIndex), KTUtil.addEvent(n.btnNext, "click", (function(e) {
                    e.preventDefault(), KTEventHandler.trigger(n.element, "kt.stepper.next", n)
                })), KTUtil.addEvent(n.btnPrevious, "click", (function(e) {
                    e.preventDefault(), KTEventHandler.trigger(n.element, "kt.stepper.previous", n)
                })), KTUtil.on(n.element, '[data-kt-stepper-action="step"]', "click", (function(e) {
                    if (e.PreviousentDefault(), n.steps && n.steps.length > 0)
                        for (var t = 0, i = n.steps.length; t < i; t++) {
                            if (n.steps[t] === this) return void("next" === p(t + 1) ? KTEventHandler.trigger(n.element, "kt.stepper.next", n) : KTEventHandler.trigger(n.element, "kt.stepper.Previousious", n))
                        }
                })), KTUtil.data(n.element).set("stepper", n)
            },
            r = function(e) {
                if (KTEventHandler.trigger(n.element, "kt.stepper.change", n), !(e === n.currentStepIndex || e > n.totalStepsNumber || e < 0)) return e = parseInt(e), n.passedStepIndex = n.currentStepIndex, n.currentStepIndex = e, o(), KTEventHandler.trigger(n.element, "kt.stepper.changed", n), n
            },
            o = function() {
                var e = "";
                e = l() ? "last" : s() ? "first" : "between", KTUtil.removeClass(n.element, "last"), KTUtil.removeClass(n.element, "first"), KTUtil.removeClass(n.element, "between"), KTUtil.addClass(n.element, e);
                var t = KTUtil.findAll(n.element, '[data-kt-stepper-element="nav"], [data-kt-stepper-element="content"], [data-kt-stepper-element="info"]');
                if (t && t.length > 0)
                    for (var i = 0, a = t.length; i < a; i++) {
                        var r = t[i],
                            o = KTUtil.index(r) + 1;
                        if (KTUtil.removeClass(r, "current"), KTUtil.removeClass(r, "completed"), KTUtil.removeClass(r, "pending"), o == n.currentStepIndex) {
                            if (KTUtil.addClass(r, "current"), !1 !== n.options.animation && "content" == r.getAttribute("data-kt-stepper-element")) {
                                KTUtil.css(r, "animationDuration", n.options.animationSpeed);
                                var u = "previous" === p(n.passedStepIndex) ? n.options.animationPreviousClass : n.options.animationNextClass;
                                KTUtil.animateClass(r, u)
                            }
                        } else o < n.currentStepIndex ? KTUtil.addClass(r, "completed") : KTUtil.addClass(r, "pending")
                    }
            },
            l = function() {
                return n.currentStepIndex === n.totalStepsNumber
            },
            s = function() {
                return 1 === n.currentStepIndex
            },
            u = function() {
                return n.totalStepsNumber >= n.currentStepIndex + 1 ? n.currentStepIndex + 1 : n.totalStepsNumber
            },
            c = function() {
                return n.currentStepIndex - 1 > 1 ? n.currentStepIndex - 1 : 1
            },
            d = function() {
                return 1
            },
            m = function() {
                return n.totalStepsNumber
            },
            p = function(e) {
                return e > n.currentStepIndex ? "next" : "previous"
            };
        !0 === KTUtil.data(e).has("stepper") ? n = KTUtil.data(e).get("stepper") : a(), n.getElement = function(e) {
            return n.element
        }, n.goTo = function(e) {
            return r(e)
        }, n.goPrevious = function() {
            return r(c())
        }, n.goNext = function() {
            return r(u())
        }, n.goFirst = function() {
            return r(d())
        }, n.goLast = function() {
            return r(m())
        }, n.getCurrentStepIndex = function() {
            return n.currentStepIndex
        }, n.getNextStepIndex = function() {
            return n.nextStepIndex
        }, n.getPassedtepIndex = function() {
            return n.passedStepIndex
        }, n.getPreviousStepIndex = function() {
            return n.PreviousStepIndex
        }, n.on = function(e, t) {
            return KTEventHandler.on(n.element, e, t)
        }, n.one = function(e, t) {
            return KTEventHandler.one(n.element, e, t)
        }, n.off = function(e) {
            return KTEventHandler.off(n.element, e)
        }, n.trigger = function(e, t) {
            return KTEventHandler.trigger(n.element, e, t, n, t)
        }
    }
};
KTStepper.getInstance = function(e) {
    return null !== e && KTUtil.data(e).has("stepper") ? KTUtil.data(e).get("stepper") : null
}, "undefined" != typeof module && void 0 !== module.exports && (module.exports = KTStepper);
var KTSticky = function(e, t) {
    var n = this,
        i = document.getElementsByTagName("BODY")[0];
    if (null != e) {
        var a = {
                offset: 200,
                reverse: !1,
                animation: !0,
                animationSpeed: "0.3s",
                animationClass: "animation-slide-in-down"
            },
            r = function() {
                n.element = e, n.options = KTUtil.deepExtend({}, a, t), n.uid = KTUtil.getUniqueId("sticky"), n.name = n.element.getAttribute("data-kt-sticky-name"), n.attributeName = "data-kt-sticky-" + n.name, n.eventTriggerState = !0, n.lastScrollTop = 0, window.addEventListener("scroll", o), o(), KTUtil.data(n.element).set("sticky", n)
            },
            o = function(e) {
                var t, a = u("offset"),
                    r = u("reverse");
                !1 !== a && (a = parseInt(a), t = KTUtil.getScrollTop(), !0 === r ? (t > a && n.lastScrollTop < t ? (!1 === i.hasAttribute(n.attributeName) && (l(), i.setAttribute(n.attributeName, "on")), !0 === n.eventTriggerState && (KTEventHandler.trigger(n.element, "kt.sticky.on", n), KTEventHandler.trigger(n.element, "kt.sticky.change", n), n.eventTriggerState = !1)) : (!0 === i.hasAttribute(n.attributeName) && (s(), i.removeAttribute(n.attributeName)), !1 === n.eventTriggerState && (KTEventHandler.trigger(n.element, "kt.sticky.off", n), KTEventHandler.trigger(n.element, "kt.sticky.change", n), n.eventTriggerState = !0)), n.lastScrollTop = t) : t > a ? (!1 === i.hasAttribute(n.attributeName) && (l(), i.setAttribute(n.attributeName, "on")), !0 === n.eventTriggerState && (KTEventHandler.trigger(n.element, "kt.sticky.on", n), KTEventHandler.trigger(n.element, "kt.sticky.change", n), n.eventTriggerState = !1)) : (!0 === i.hasAttribute(n.attributeName) && (s(), i.removeAttribute(n.attributeName)), !1 === n.eventTriggerState && (KTEventHandler.trigger(n.element, "kt.sticky.off", n), KTEventHandler.trigger(n.element, "kt.sticky.change", n), n.eventTriggerState = !0)))
            },
            l = function(e) {
                var t = u("top"),
                    i = u("left"),
                    a = (u("right"), u("width")),
                    r = u("zindex");
                if (!0 !== e && !0 === u("animation") && (KTUtil.css(n.element, "animationDuration", u("animationSpeed")), KTUtil.animateClass(n.element, "animation " + u("animationClass"))), null !== r && (KTUtil.css(n.element, "z-index", r), KTUtil.css(n.element, "position", "fixed")), null !== t && KTUtil.css(n.element, "top", t), null !== a) {
                    if (a.target) {
                        var o = document.querySelector(a.target);
                        o && (a = KTUtil.css(o, "width"))
                    }
                    KTUtil.css(n.element, "width", a)
                }
                if (null !== i && "auto" === String(i).toLowerCase()) {
                    var l = KTUtil.offset(n.element).left;
                    l > 0 && KTUtil.css(n.element, "left", String(l) + "px")
                }
            },
            s = function() {
                KTUtil.css(n.element, "top", ""), KTUtil.css(n.element, "width", ""), KTUtil.css(n.element, "left", ""), KTUtil.css(n.element, "right", ""), KTUtil.css(n.element, "z-index", ""), KTUtil.css(n.element, "position", "")
            },
            u = function(e) {
                if (!0 === n.element.hasAttribute("data-kt-sticky-" + e)) {
                    var t = n.element.getAttribute("data-kt-sticky-" + e),
                        i = KTUtil.getResponsiveValue(t);
                    return null !== i && "true" === String(i) ? i = !0 : null !== i && "false" === String(i) && (i = !1), i
                }
                var a = KTUtil.snakeToCamel(e);
                return n.options[a] ? KTUtil.getResponsiveValue(n.options[a]) : null
            };
        !0 === KTUtil.data(e).has("sticky") ? n = KTUtil.data(e).get("sticky") : r(), n.update = function() {
            !0 === i.hasAttribute(n.attributeName) && (s(), i.removeAttribute(n.attributeName), l(!0), i.setAttribute(n.attributeName, "on"))
        }, n.on = function(e, t) {
            return KTEventHandler.on(n.element, e, t)
        }, n.one = function(e, t) {
            return KTEventHandler.one(n.element, e, t)
        }, n.off = function(e) {
            return KTEventHandler.off(n.element, e)
        }, n.trigger = function(e, t) {
            return KTEventHandler.trigger(n.element, e, t, n, t)
        }
    }
};
KTSticky.getInstance = function(e) {
    return null !== e && KTUtil.data(e).has("sticky") ? KTUtil.data(e).get("sticky") : null
}, KTSticky.createInstances = function(e) {
    var t = document.getElementsByTagName("BODY")[0].querySelectorAll(e);
    if (t && t.length > 0)
        for (var n = 0, i = t.length; n < i; n++) new KTSticky(t[n])
}, window.addEventListener("resize", (function() {
    var e = document.getElementsByTagName("BODY")[0];
    KTUtil.throttle(undefined, (function() {
        var t = e.querySelectorAll('[data-kt-sticky="true"]');
        if (t && t.length > 0)
            for (var n = 0, i = t.length; n < i; n++) KTSticky.getInstance(t[n]).update()
    }), 200)
})), KTSticky.init = function() {
    KTSticky.createInstances('[data-kt-sticky="true"]')
}, "loading" === document.readyState ? document.addEventListener("DOMContentLoaded", KTSticky.init) : KTSticky.init(), "undefined" != typeof module && void 0 !== module.exports && (module.exports = KTSticky);
var KTToggle = function(e, t) {
    var n = this;
    document.getElementsByTagName("BODY")[0];
    if (e) {
        var i = {
                saveState: !0
            },
            a = function() {
                n.options = KTUtil.deepExtend({}, i, t), n.uid = KTUtil.getUniqueId("toggle"), n.element = e, n.target = document.querySelector(n.element.getAttribute("data-kt-toggle-target")), n.state = n.element.hasAttribute("data-kt-toggle-state") ? n.element.getAttribute("data-kt-toggle-state") : "", n.attribute = "data-kt-" + n.element.getAttribute("data-kt-toggle-name"), r(), KTUtil.data(n.element).set("toggle", n)
            },
            r = function() {
                KTUtil.addEvent(n.element, "click", (function(e) {
                    e.preventDefault(), o()
                }))
            },
            o = function() {
                return KTEventHandler.trigger(n.element, "kt.toggle.change", n), u() ? s() : l(), KTEventHandler.trigger(n.element, "kt.toggle.changed", n), n
            },
            l = function() {
                if (!0 !== u()) return KTEventHandler.trigger(n.element, "kt.toggle.enable", n), n.target.setAttribute(n.attribute, "on"), n.state.length > 0 && n.element.classList.add(n.state), void 0 !== KTCookie && !0 === n.options.saveState && KTCookie.set(n.attribute, "on"), KTEventHandler.trigger(n.element, "kt.toggle.enabled", n), n
            },
            s = function() {
                if (!1 !== u()) return KTEventHandler.trigger(n.element, "kt.toggle.disable", n), n.target.removeAttribute(n.attribute), n.state.length > 0 && n.element.classList.remove(n.state), void 0 !== KTCookie && !0 === n.options.saveState && KTCookie.remove(n.attribute), KTEventHandler.trigger(n.element, "kt.toggle.disabled", n), n
            },
            u = function() {
                return "on" === String(n.target.getAttribute(n.attribute)).toLowerCase()
            };
        !0 === KTUtil.data(e).has("toggle") ? n = KTUtil.data(e).get("toggle") : a(), n.toggle = function() {
            return o()
        }, n.enable = function() {
            return l()
        }, n.disable = function() {
            return s()
        }, n.isEnabled = function() {
            return u()
        }, n.goElement = function() {
            return n.element
        }, n.on = function(e, t) {
            return KTEventHandler.on(n.element, e, t)
        }, n.one = function(e, t) {
            return KTEventHandler.one(n.element, e, t)
        }, n.off = function(e) {
            return KTEventHandler.off(n.element, e)
        }, n.trigger = function(e, t) {
            return KTEventHandler.trigger(n.element, e, t, n, t)
        }
    }
};
KTToggle.getInstance = function(e) {
        return null !== e && KTUtil.data(e).has("toggle") ? KTUtil.data(e).get("toggle") : null
    }, KTToggle.createInstances = function(e) {
        var t = document.getElementsByTagName("BODY")[0].querySelectorAll(e);
        if (t && t.length > 0)
            for (var n = 0, i = t.length; n < i; n++) new KTToggle(t[n])
    }, KTToggle.init = function() {
        KTToggle.createInstances("[data-kt-toggle]")
    }, "loading" === document.readyState ? document.addEventListener("DOMContentLoaded", KTToggle.init) : KTToggle.init(), "undefined" != typeof module && void 0 !== module.exports && (module.exports = KTToggle), Element.prototype.matches || (Element.prototype.matches = function(e) {
        for (var t = (this.document || this.ownerDocument).querySelectorAll(e), n = t.length; --n >= 0 && t.item(n) !== this;);
        return n > -1
    }), Element.prototype.closest || (Element.prototype.closest = function(e) {
        var t = this;
        if (!document.documentElement.contains(this)) return null;
        do {
            if (t.matches(e)) return t;
            t = t.parentElement
        } while (null !== t);
        return null
    })
    /**
     * ChildNode.remove() polyfill
     * https://gomakethings.com/removing-an-element-from-the-dom-the-es6-way/
     * @author Chris Ferdinandi
     * @license MIT
     */
    ,
    function(e) {
        for (var t = 0; t < e.length; t++) window[e[t]] && !("remove" in window[e[t]].prototype) && (window[e[t]].prototype.remove = function() {
            this.parentNode.removeChild(this)
        })
    }(["Element", "CharacterData", "DocumentType"]),
    function() {
        for (var e = 0, t = ["webkit", "moz"], n = 0; n < t.length && !window.requestAnimationFrame; ++n) window.requestAnimationFrame = window[t[n] + "RequestAnimationFrame"], window.cancelAnimationFrame = window[t[n] + "CancelAnimationFrame"] || window[t[n] + "CancelRequestAnimationFrame"];
        window.requestAnimationFrame || (window.requestAnimationFrame = function(t) {
            var n = (new Date).getTime(),
                i = Math.max(0, 16 - (n - e)),
                a = window.setTimeout((function() {
                    t(n + i)
                }), i);
            return e = n + i, a
        }), window.cancelAnimationFrame || (window.cancelAnimationFrame = function(e) {
            clearTimeout(e)
        })
    }(), [Element.prototype, Document.prototype, DocumentFragment.prototype].forEach((function(e) {
        e.hasOwnProperty("prepend") || Object.defineProperty(e, "prepend", {
            configurable: !0,
            enumerable: !0,
            writable: !0,
            value: function() {
                var e = Array.prototype.slice.call(arguments),
                    t = document.createDocumentFragment();
                e.forEach((function(e) {
                    var n = e instanceof Node;
                    t.appendChild(n ? e : document.createTextNode(String(e)))
                })), this.insertBefore(t, this.firstChild)
            }
        })
    })), null == Element.prototype.getAttributeNames && (Element.prototype.getAttributeNames = function() {
        for (var e = this.attributes, t = e.length, n = new Array(t), i = 0; i < t; i++) n[i] = e[i].name;
        return n
    }), window.KTUtilElementDataStore = {}, window.KTUtilElementDataStoreID = 0, window.KTUtilDelegatedEventHandlers = {};
var KTUtil = function() {
    var e = [],
        t = function() {
            window.addEventListener("resize", (function() {
                KTUtil.throttle(undefined, (function() {
                    ! function() {
                        for (var t = 0; t < e.length; t++) e[t].call()
                    }()
                }), 200)
            }))
        };
    return {
        init: function(e) {
            t()
        },
        addResizeHandler: function(t) {
            e.push(t)
        },
        removeResizeHandler: function(t) {
            for (var n = 0; n < e.length; n++) t === e[n] && delete e[n]
        },
        runResizeHandlers: function() {
            _runResizeHandlers()
        },
        resize: function() {
            if ("function" == typeof Event) window.dispatchEvent(new Event("resize"));
            else {
                var e = window.document.createEvent("UIEvents");
                e.initUIEvent("resize", !0, !1, window, 0), window.dispatchEvent(e)
            }
        },
        getURLParam: function(e) {
            var t, n, i = window.location.search.substring(1).split("&");
            for (t = 0; t < i.length; t++)
                if ((n = i[t].split("="))[0] == e) return unescape(n[1]);
            return null
        },
        isMobileDevice: function() {
            var e = this.getViewPort().width < this.getBreakpoint("lg");
            return !1 === e && (e = null != navigator.userAgent.match(/iPad/i)), e
        },
        isDesktopDevice: function() {
            return !KTUtil.isMobileDevice()
        },
        getViewPort: function() {
            var e = window,
                t = "inner";
            return "innerWidth" in window || (t = "client", e = document.documentElement || document.body), {
                width: e[t + "Width"],
                height: e[t + "Height"]
            }
        },
        isBreakpointUp: function(e) {
            return this.getViewPort().width >= this.getBreakpoint(e)
        },
        isBreakpointDown: function(e) {
            return this.getViewPort().width < this.getBreakpoint(e)
        },
        getViewportWidth: function() {
            return this.getViewPort().width
        },
        getUniqueId: function(e) {
            return e + Math.floor(Math.random() * (new Date).getTime())
        },
        getBreakpoint: function(e) {
            var t = this.getCssVariableValue("--bs-" + e);
            return t && (t = parseInt(t.trim())), t
        },
        isset: function(e, t) {
            var n;
            if (-1 !== (t = t || "").indexOf("[")) throw new Error("Unsupported object path notation.");
            t = t.split(".");
            do {
                if (void 0 === e) return !1;
                if (n = t.shift(), !e.hasOwnProperty(n)) return !1;
                e = e[n]
            } while (t.length);
            return !0
        },
        getHighestZindex: function(e) {
            for (var t, n; e && e !== document;) {
                if (("absolute" === (t = KTUtil.css(e, "position")) || "relative" === t || "fixed" === t) && (n = parseInt(KTUtil.css(e, "z-index")), !isNaN(n) && 0 !== n)) return n;
                e = e.parentNode
            }
            return null
        },
        hasFixedPositionedParent: function(e) {
            for (; e && e !== document;) {
                if ("fixed" === KTUtil.css(e, "position")) return !0;
                e = e.parentNode
            }
            return !1
        },
        sleep: function(e) {
            for (var t = (new Date).getTime(), n = 0; n < 1e7 && !((new Date).getTime() - t > e); n++);
        },
        getRandomInt: function(e, t) {
            return Math.floor(Math.random() * (t - e + 1)) + e
        },
        isAngularVersion: function() {
            return void 0 !== window.Zone
        },
        deepExtend: function(e) {
            e = e || {};
            for (var t = 1; t < arguments.length; t++) {
                var n = arguments[t];
                if (n)
                    for (var i in n) n.hasOwnProperty(i) && ("[object Object]" !== Object.prototype.toString.call(n[i]) ? e[i] = n[i] : e[i] = KTUtil.deepExtend(e[i], n[i]))
            }
            return e
        },
        extend: function(e) {
            e = e || {};
            for (var t = 1; t < arguments.length; t++)
                if (arguments[t])
                    for (var n in arguments[t]) arguments[t].hasOwnProperty(n) && (e[n] = arguments[t][n]);
            return e
        },
        getBody: function() {
            return document.getElementsByTagName("body")[0]
        },
        hasClasses: function(e, t) {
            if (e) {
                for (var n = t.split(" "), i = 0; i < n.length; i++)
                    if (0 == KTUtil.hasClass(e, KTUtil.trim(n[i]))) return !1;
                return !0
            }
        },
        hasClass: function(e, t) {
            if (e) return e.classList ? e.classList.contains(t) : new RegExp("\\b" + t + "\\b").test(e.className)
        },
        addClass: function(e, t) {
            if (e && void 0 !== t) {
                var n = t.split(" ");
                if (e.classList)
                    for (var i = 0; i < n.length; i++) n[i] && n[i].length > 0 && e.classList.add(KTUtil.trim(n[i]));
                else if (!KTUtil.hasClass(e, t))
                    for (var a = 0; a < n.length; a++) e.className += " " + KTUtil.trim(n[a])
            }
        },
        removeClass: function(e, t) {
            if (e && void 0 !== t) {
                var n = t.split(" ");
                if (e.classList)
                    for (var i = 0; i < n.length; i++) e.classList.remove(KTUtil.trim(n[i]));
                else if (KTUtil.hasClass(e, t))
                    for (var a = 0; a < n.length; a++) e.className = e.className.replace(new RegExp("\\b" + KTUtil.trim(n[a]) + "\\b", "g"), "")
            }
        },
        triggerCustomEvent: function(e, t, n) {
            var i;
            window.CustomEvent ? i = new CustomEvent(t, {
                detail: n
            }) : (i = document.createEvent("CustomEvent")).initCustomEvent(t, !0, !0, n), e.dispatchEvent(i)
        },
        triggerEvent: function(e, t) {
            var n;
            if (e.ownerDocument) n = e.ownerDocument;
            else {
                if (9 != e.nodeType) throw new Error("Invalid node passed to fireEvent: " + e.id);
                n = e
            }
            if (e.dispatchEvent) {
                var i = "";
                switch (t) {
                    case "click":
                    case "mouseenter":
                    case "mouseleave":
                    case "mousedown":
                    case "mouseup":
                        i = "MouseEvents";
                        break;
                    case "focus":
                    case "change":
                    case "blur":
                    case "select":
                        i = "HTMLEvents";
                        break;
                    default:
                        throw "fireEvent: Couldn't find an event class for event '" + t + "'."
                }
                var a = "change" != t;
                (r = n.createEvent(i)).initEvent(t, a, !0), r.synthetic = !0, e.dispatchEvent(r, !0)
            } else if (e.fireEvent) {
                var r;
                (r = n.createEventObject()).synthetic = !0, e.fireEvent("on" + t, r)
            }
        },
        index: function(e) {
            for (var t = e.parentNode.children, n = 0; n < t.length; n++)
                if (t[n] == e) return n
        },
        trim: function(e) {
            return e.trim()
        },
        eventTriggered: function(e) {
            return !!e.currentTarget.dataset.triggered || (e.currentTarget.dataset.triggered = !0, !1)
        },
        remove: function(e) {
            e && e.parentNode && e.parentNode.removeChild(e)
        },
        find: function(e, t) {
            return null !== e ? e.querySelector(t) : null
        },
        findAll: function(e, t) {
            return null !== e ? e.querySelectorAll(t) : null
        },
        insertAfter: function(e, t) {
            return t.parentNode.insertBefore(e, t.nextSibling)
        },
        parents: function(e, t) {
            for (var n = []; e && e !== document; e = e.parentNode) t ? e.matches(t) && n.push(e) : n.push(e);
            return n
        },
        children: function(e, t, n) {
            if (!e || !e.childNodes) return null;
            for (var i = [], a = 0, r = e.childNodes.length; a < r; ++a) 1 == e.childNodes[a].nodeType && KTUtil.matches(e.childNodes[a], t, n) && i.push(e.childNodes[a]);
            return i
        },
        child: function(e, t, n) {
            var i = KTUtil.children(e, t, n);
            return i ? i[0] : null
        },
        matches: function(e, t, n) {
            var i = Element.prototype,
                a = i.matches || i.webkitMatchesSelector || i.mozMatchesSelector || i.msMatchesSelector || function(e) {
                    return -1 !== [].indexOf.call(document.querySelectorAll(e), this)
                };
            return !(!e || !e.tagName) && a.call(e, t)
        },
        data: function(e) {
            return {
                set: function(t, n) {
                    e && (void 0 === e.customDataTag && (window.KTUtilElementDataStoreID++, e.customDataTag = window.KTUtilElementDataStoreID), void 0 === window.KTUtilElementDataStore[e.customDataTag] && (window.KTUtilElementDataStore[e.customDataTag] = {}), window.KTUtilElementDataStore[e.customDataTag][t] = n)
                },
                get: function(t) {
                    if (e) return void 0 === e.customDataTag ? null : this.has(t) ? window.KTUtilElementDataStore[e.customDataTag][t] : null
                },
                has: function(t) {
                    return !!e && (void 0 !== e.customDataTag && !(!window.KTUtilElementDataStore[e.customDataTag] || !window.KTUtilElementDataStore[e.customDataTag][t]))
                },
                remove: function(t) {
                    e && this.has(t) && delete window.KTUtilElementDataStore[e.customDataTag][t]
                }
            }
        },
        outerWidth: function(e, t) {
            var n;
            return !0 === t ? (n = parseFloat(e.offsetWidth), n += parseFloat(KTUtil.css(e, "margin-left")) + parseFloat(KTUtil.css(e, "margin-right")), parseFloat(n)) : n = parseFloat(e.offsetWidth)
        },
        offset: function(e) {
            var t, n;
            if (e) return e.getClientRects().length ? (t = e.getBoundingClientRect(), n = e.ownerDocument.defaultView, {
                top: t.top + n.pageYOffset,
                left: t.left + n.pageXOffset,
                right: window.innerWidth - (e.offsetLeft + e.offsetWidth)
            }) : {
                top: 0,
                left: 0
            }
        },
        height: function(e) {
            return KTUtil.css(e, "height")
        },
        outerHeight: function(e, t) {
            var n, i = e.offsetHeight;
            return void 0 !== t && !0 === t ? (n = getComputedStyle(e), i += parseInt(n.marginTop) + parseInt(n.marginBottom)) : i
        },
        visible: function(e) {
            return !(0 === e.offsetWidth && 0 === e.offsetHeight)
        },
        attr: function(e, t, n) {
            if (null != e) return void 0 === n ? e.getAttribute(t) : void e.setAttribute(t, n)
        },
        hasAttr: function(e, t) {
            if (null != e) return !!e.getAttribute(t)
        },
        removeAttr: function(e, t) {
            null != e && e.removeAttribute(t)
        },
        animate: function(e, t, n, i, a, r) {
            var o = {};
            if (o.linear = function(e, t, n, i) {
                    return n * e / i + t
                }, a = o.linear, "number" == typeof e && "number" == typeof t && "number" == typeof n && "function" == typeof i) {
                "function" != typeof r && (r = function() {});
                var l = window.requestAnimationFrame || function(e) {
                        window.setTimeout(e, 20)
                    },
                    s = t - e;
                i(e);
                var u = window.performance && window.performance.now ? window.performance.now() : +new Date;
                l((function o(c) {
                    var d = (c || +new Date) - u;
                    d >= 0 && i(a(d, e, s, n)), d >= 0 && d >= n ? (i(t), r()) : l(o)
                }))
            }
        },
        actualCss: function(e, t, n) {
            var i, a = "";
            if (e instanceof HTMLElement != !1) return e.getAttribute("kt-hidden-" + t) && !1 !== n ? parseFloat(e.getAttribute("kt-hidden-" + t)) : (a = e.style.cssText, e.style.cssText = "position: absolute; visibility: hidden; display: block;", "width" == t ? i = e.offsetWidth : "height" == t && (i = e.offsetHeight), e.style.cssText = a, e.setAttribute("kt-hidden-" + t, i), parseFloat(i))
        },
        actualHeight: function(e, t) {
            return KTUtil.actualCss(e, "height", t)
        },
        actualWidth: function(e, t) {
            return KTUtil.actualCss(e, "width", t)
        },
        getScroll: function(e, t) {
            return t = "scroll" + t, e == window || e == document ? self["scrollTop" == t ? "pageYOffset" : "pageXOffset"] || browserSupportsBoxModel && document.documentElement[t] || document.body[t] : e[t]
        },
        css: function(e, t, n, i) {
            if (e)
                if (void 0 !== n) !0 === i ? e.style.setProperty(t, n, "important") : e.style[t] = n;
                else {
                    var a = (e.ownerDocument || document).defaultView;
                    if (a && a.getComputedStyle) return t = t.replace(/([A-Z])/g, "-$1").toLowerCase(), a.getComputedStyle(e, null).getPropertyValue(t);
                    if (e.currentStyle) return t = t.replace(/\-(\w)/g, (function(e, t) {
                        return t.toUpperCase()
                    })), n = e.currentStyle[t], /^\d+(em|pt|%|ex)?$/i.test(n) ? function(t) {
                        var n = e.style.left,
                            i = e.runtimeStyle.left;
                        return e.runtimeStyle.left = e.currentStyle.left, e.style.left = t || 0, t = e.style.pixelLeft + "px", e.style.left = n, e.runtimeStyle.left = i, t
                    }(n) : n
                }
        },
        slide: function(e, t, n, i, a) {
            if (!(!e || "up" == t && !1 === KTUtil.visible(e) || "down" == t && !0 === KTUtil.visible(e))) {
                n = n || 600;
                var r = KTUtil.actualHeight(e),
                    o = !1,
                    l = !1;
                KTUtil.css(e, "padding-top") && !0 !== KTUtil.data(e).has("slide-padding-top") && KTUtil.data(e).set("slide-padding-top", KTUtil.css(e, "padding-top")), KTUtil.css(e, "padding-bottom") && !0 !== KTUtil.data(e).has("slide-padding-bottom") && KTUtil.data(e).set("slide-padding-bottom", KTUtil.css(e, "padding-bottom")), KTUtil.data(e).has("slide-padding-top") && (o = parseInt(KTUtil.data(e).get("slide-padding-top"))), KTUtil.data(e).has("slide-padding-bottom") && (l = parseInt(KTUtil.data(e).get("slide-padding-bottom"))), "up" == t ? (e.style.cssText = "display: block; overflow: hidden;", o && KTUtil.animate(0, o, n, (function(t) {
                    e.style.paddingTop = o - t + "px"
                }), "linear"), l && KTUtil.animate(0, l, n, (function(t) {
                    e.style.paddingBottom = l - t + "px"
                }), "linear"), KTUtil.animate(0, r, n, (function(t) {
                    e.style.height = r - t + "px"
                }), "linear", (function() {
                    e.style.height = "", e.style.display = "none", "function" == typeof i && i()
                }))) : "down" == t && (e.style.cssText = "display: block; overflow: hidden;", o && KTUtil.animate(0, o, n, (function(t) {
                    e.style.paddingTop = t + "px"
                }), "linear", (function() {
                    e.style.paddingTop = ""
                })), l && KTUtil.animate(0, l, n, (function(t) {
                    e.style.paddingBottom = t + "px"
                }), "linear", (function() {
                    e.style.paddingBottom = ""
                })), KTUtil.animate(0, r, n, (function(t) {
                    e.style.height = t + "px"
                }), "linear", (function() {
                    e.style.height = "", e.style.display = "", e.style.overflow = "", "function" == typeof i && i()
                })))
            }
        },
        slideUp: function(e, t, n) {
            KTUtil.slide(e, "up", t, n)
        },
        slideDown: function(e, t, n) {
            KTUtil.slide(e, "down", t, n)
        },
        show: function(e, t) {
            void 0 !== e && (e.style.display = t || "block")
        },
        hide: function(e) {
            void 0 !== e && (e.style.display = "none")
        },
        addEvent: function(e, t, n, i) {
            null != e && e.addEventListener(t, n)
        },
        removeEvent: function(e, t, n) {
            null !== e && e.removeEventListener(t, n)
        },
        on: function(e, t, n, i) {
            if (null !== e) {
                var a = KTUtil.getUniqueId("event");
                return window.KTUtilDelegatedEventHandlers[a] = function(n) {
                    for (var a = e.querySelectorAll(t), r = n.target; r && r !== e;) {
                        for (var o = 0, l = a.length; o < l; o++) r === a[o] && i.call(r, n);
                        r = r.parentNode
                    }
                }, KTUtil.addEvent(e, n, window.KTUtilDelegatedEventHandlers[a]), a
            }
        },
        off: function(e, t, n) {
            e && window.KTUtilDelegatedEventHandlers[n] && (KTUtil.removeEvent(e, t, window.KTUtilDelegatedEventHandlers[n]), delete window.KTUtilDelegatedEventHandlers[n])
        },
        one: function(e, t, n) {
            e.addEventListener(t, (function t(i) {
                return i.target && i.target.removeEventListener && i.target.removeEventListener(i.type, t), e && e.removeEventListener && i.currentTarget.removeEventListener(i.type, t), n(i)
            }))
        },
        hash: function(e) {
            var t, n = 0;
            if (0 === e.length) return n;
            for (t = 0; t < e.length; t++) n = (n << 5) - n + e.charCodeAt(t), n |= 0;
            return n
        },
        animateClass: function(e, t, n) {
            var i, a = {
                animation: "animationend",
                OAnimation: "oAnimationEnd",
                MozAnimation: "mozAnimationEnd",
                WebkitAnimation: "webkitAnimationEnd",
                msAnimation: "msAnimationEnd"
            };
            for (var r in a) void 0 !== e.style[r] && (i = a[r]);
            KTUtil.addClass(e, t), KTUtil.one(e, i, (function() {
                KTUtil.removeClass(e, t)
            })), n && KTUtil.one(e, i, n)
        },
        transitionEnd: function(e, t) {
            var n, i = {
                transition: "transitionend",
                OTransition: "oTransitionEnd",
                MozTransition: "mozTransitionEnd",
                WebkitTransition: "webkitTransitionEnd",
                msTransition: "msTransitionEnd"
            };
            for (var a in i) void 0 !== e.style[a] && (n = i[a]);
            KTUtil.one(e, n, t)
        },
        animationEnd: function(e, t) {
            var n, i = {
                animation: "animationend",
                OAnimation: "oAnimationEnd",
                MozAnimation: "mozAnimationEnd",
                WebkitAnimation: "webkitAnimationEnd",
                msAnimation: "msAnimationEnd"
            };
            for (var a in i) void 0 !== e.style[a] && (n = i[a]);
            KTUtil.one(e, n, t)
        },
        animateDelay: function(e, t) {
            for (var n = ["webkit-", "moz-", "ms-", "o-", ""], i = 0; i < n.length; i++) KTUtil.css(e, n[i] + "animation-delay", t)
        },
        animateDuration: function(e, t) {
            for (var n = ["webkit-", "moz-", "ms-", "o-", ""], i = 0; i < n.length; i++) KTUtil.css(e, n[i] + "animation-duration", t)
        },
        scrollTo: function(e, t, n) {
            n = n || 500;
            var i, a, r = e ? KTUtil.offset(e).top : 0;
            t && (r -= t), i = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0, a = r, KTUtil.animate(i, a, n, (function(e) {
                document.documentElement.scrollTop = e, document.body.parentNode.scrollTop = e, document.body.scrollTop = e
            }))
        },
        scrollTop: function(e, t) {
            KTUtil.scrollTo(null, e, t)
        },
        isArray: function(e) {
            return e && Array.isArray(e)
        },
        isEmpty: function(e) {
            for (var t in e)
                if (e.hasOwnProperty(t)) return !1;
            return !0
        },
        numberString: function(e) {
            for (var t = (e += "").split("."), n = t[0], i = t.length > 1 ? "." + t[1] : "", a = /(\d+)(\d{3})/; a.test(n);) n = n.replace(a, "$1,$2");
            return n + i
        },
        isRTL: function() {
            return "rtl" === document.querySelector("html").getAttribute("direction")
        },
        snakeToCamel: function(e) {
            return e.replace(/(\-\w)/g, (function(e) {
                return e[1].toUpperCase()
            }))
        },
        filterBoolean: function(e) {
            return !0 === e || "true" === e || !1 !== e && "false" !== e && e
        },
        setHTML: function(e, t) {
            e.innerHTML = t
        },
        getHTML: function(e) {
            if (e) return e.innerHTML
        },
        getDocumentHeight: function() {
            var e = document.body,
                t = document.documentElement;
            return Math.max(e.scrollHeight, e.offsetHeight, t.clientHeight, t.scrollHeight, t.offsetHeight)
        },
        getScrollTop: function() {
            return (document.scrollingElement || document.documentElement).scrollTop
        },
        colorLighten: function(e, t) {
            const n = function(e, t) {
                let n = parseInt(e, 16) + t,
                    i = n > 255 ? 255 : n;
                return i = i.toString(16).length > 1 ? i.toString(16) : `0${i.toString(16)}`, i
            };
            return e = e.indexOf("#") >= 0 ? e.substring(1, e.length) : e, t = parseInt(255 * t / 100), `#${n(e.substring(0,2),t)}${n(e.substring(2,4),t)}${n(e.substring(4,6),t)}`
        },
        colorDarken: function(e, t) {
            const n = function(e, t) {
                let n = parseInt(e, 16) - t,
                    i = n < 0 ? 0 : n;
                return i = i.toString(16).length > 1 ? i.toString(16) : `0${i.toString(16)}`, i
            };
            return e = e.indexOf("#") >= 0 ? e.substring(1, e.length) : e, t = parseInt(255 * t / 100), `#${n(e.substring(0,2),t)}${n(e.substring(2,4),t)}${n(e.substring(4,6),t)}`
        },
        throttle: function(e, t, n) {
            e || (e = setTimeout((function() {
                t(), e = void 0
            }), n))
        },
        debounce: function(e, t, n) {
            clearTimeout(e), e = setTimeout(t, n)
        },
        parseJson: function(e) {
            if ("string" == typeof e) {
                var t = (e = e.replace(/'/g, '"')).replace(/(\w+:)|(\w+ :)/g, (function(e) {
                    return '"' + e.substring(0, e.length - 1) + '":'
                }));
                try {
                    e = JSON.parse(t)
                } catch (e) {}
            }
            return e
        },
        getResponsiveValue: function(e, t) {
            var n, i = this.getViewPort().width;
            if ("object" == typeof(e = KTUtil.parseJson(e))) {
                var a, r, o = -1;
                for (var l in e)(r = "default" === l ? 0 : this.getBreakpoint(l) ? this.getBreakpoint(l) : parseInt(l)) <= i && r > o && (a = l, o = r);
                n = a ? e[a] : e
            } else n = e;
            return n
        },
        each: function(e, t) {
            return [].slice.call(e).map(t)
        },
        getSelectorMatchValue: function(e) {
            var t = null;
            if ("object" == typeof(e = KTUtil.parseJson(e))) {
                if (void 0 !== e.match) {
                    var n = Object.keys(e.match)[0];
                    e = Object.values(e.match)[0], null !== document.querySelector(n) && (t = e)
                }
            } else t = e;
            return t
        },
        getConditionalValue: function(e) {
            e = KTUtil.parseJson(e);
            var t = KTUtil.getResponsiveValue(e);
            return null !== t && void 0 !== t.match && (t = KTUtil.getSelectorMatchValue(t)), null === t && null !== e && void 0 !== e.default && (t = e.default), t
        },
        getCssVariableValue: function(e) {
            var t = getComputedStyle(document.documentElement).getPropertyValue(e);
            return t && t.length > 0 && (t = t.trim()), t
        },
        isInViewport: function(e) {
            var t = e.getBoundingClientRect();
            return t.top >= 0 && t.left >= 0 && t.bottom <= (window.innerHeight || document.documentElement.clientHeight) && t.right <= (window.innerWidth || document.documentElement.clientWidth)
        },
        onDOMContentLoaded: function(e) {
            "loading" === document.readyState ? document.addEventListener("DOMContentLoaded", e) : e()
        },
        inIframe: function() {
            try {
                return window.self !== window.top
            } catch (e) {
                return !0
            }
        }
    }
}();
"undefined" != typeof module && void 0 !== module.exports && (module.exports = KTUtil);
var KTApp = function() {
    var e = function(e, t) {
            var n = {};
            e.hasAttribute("data-bs-delay-hide") && (n.hide = e.getAttribute("data-bs-delay-hide")), e.hasAttribute("data-bs-delay-show") && (n.show = e.getAttribute("data-bs-delay-show")), n && (t.delay = n), e.hasAttribute("data-bs-dismiss") && "click" == e.getAttribute("data-bs-dismiss") && (t.dismiss = "click");
            var i = new bootstrap.Tooltip(e, t);
            return t.dismiss && "click" === t.dismiss && e.addEventListener("click", (function(e) {
                i.hide()
            })), i
        },
        t = function(e, t) {
            var n = {};
            e.hasAttribute("data-bs-delay-hide") && (n.hide = e.getAttribute("data-bs-delay-hide")), e.hasAttribute("data-bs-delay-show") && (n.show = e.getAttribute("data-bs-delay-show")), n && (t.delay = n), "true" == e.getAttribute("data-bs-dismiss") && (t.dismiss = !0), !0 === t.dismiss && (t.template = '<div class="popover" role="tooltip"><div class="popover-arrow"></div><span class="popover-dismiss btn btn-icon"><i class="bi bi-x fs-2"></i></span><h3 class="popover-header"></h3><div class="popover-body"></div></div>');
            var i = new bootstrap.Popover(e, t);
            if (!0 === t.dismiss) {
                var a = function(e) {
                    i.hide()
                };
                e.addEventListener("shown.bs.popover", (function() {
                    document.getElementById(e.getAttribute("aria-describedby")).addEventListener("click", a)
                })), e.addEventListener("hide.bs.popover", (function() {
                    document.getElementById(e.getAttribute("aria-describedby")).removeEventListener("click", a)
                }))
            }
            return i
        },
        n = function() {
            [].slice.call(document.querySelectorAll('[data-kt-countup="true"]:not(.counted)')).map((function(e) {
                if (KTUtil.isInViewport(e) && KTUtil.visible(e)) {
                    var t = {},
                        n = e.getAttribute("data-kt-countup-value");
                    n = parseFloat(n.replace(/,/, "")), e.hasAttribute("data-kt-countup-start-val") && (t.startVal = parseFloat(e.getAttribute("data-kt-countup-start-val"))), e.hasAttribute("data-kt-countup-duration") && (t.duration = parseInt(e.getAttribute("data-kt-countup-duration"))), e.hasAttribute("data-kt-countup-decimal-places") && (t.decimalPlaces = parseInt(e.getAttribute("data-kt-countup-decimal-places"))), e.hasAttribute("data-kt-countup-prefix") && (t.prefix = e.getAttribute("data-kt-countup-prefix")), e.hasAttribute("data-kt-countup-suffix") && (t.suffix = e.getAttribute("data-kt-countup-suffix")), new countUp.CountUp(e, n, t).start(), e.classList.add("counted")
                }
            }))
        },
        i = function() {
            const e = Array.prototype.slice.call(document.querySelectorAll('[data-tns="true"]'), 0);
            (e || 0 !== e.length) && e.forEach((function(e) {
                ! function(e) {
                    if (!e) return;
                    const t = {};
                    e.getAttributeNames().forEach((function(n) {
                        if (/^data-tns-.*/g.test(n)) {
                            let a = n.replace("data-tns-", "").toLowerCase().replace(/(?:[\s-])\w/g, (function(e) {
                                return e.replace("-", "").toUpperCase()
                            }));
                            if ("data-tns-responsive" === n) {
                                const i = e.getAttribute(n).replace(/(\w+:)|(\w+ :)/g, (function(e) {
                                    return '"' + e.substring(0, e.length - 1) + '":'
                                }));
                                try {
                                    t[a] = JSON.parse(i)
                                } catch (e) {}
                            } else t[a] = "true" === (i = e.getAttribute(n)) || "false" !== i && i
                        }
                        var i
                    }));
                    const n = Object.assign({}, {
                        container: e,
                        slideBy: "page",
                        autoplay: !0,
                        autoplayButtonOutput: !1
                    }, t);
                    e.closest(".tns") && KTUtil.addClass(e.closest(".tns"), "tns-initiazlied"), tns(n)
                }(e)
            }))
        };
    return {
        init: function() {
            this.initPageLoader(), this.initBootstrapTooltips(), this.initBootstrapPopovers(), this.initScrollSpy(), this.initButtons(), this.initCheck(), this.initSelect2(), this.initCountUp(), this.initCountUpTabs(), this.initAutosize(), this.initTinySliders(), this.initSmoothScroll()
        },
        initPageLoader: function() {
            KTUtil.removeClass(document.body, "page-loading")
        },
        initBootstrapTooltip: function(t, n) {
            return e(t, n)
        },
        initBootstrapTooltips: function() {
            [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]')).map((function(t) {
                e(t, {})
            }))
        },
        initBootstrapPopovers: function() {
            [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]')).map((function(e) {
                t(e, {})
            }))
        },
        initBootstrapPopover: function(e, n) {
            return t(e, n)
        },
        initScrollSpy: function() {
            [].slice.call(document.querySelectorAll('[data-bs-spy="scroll"]')).map((function(e) {
                e.getAttribute("data-bs-target");
                var t = document.querySelector(e.getAttribute("data-bs-target")),
                    n = bootstrap.ScrollSpy.getInstance(t);
                n && n.refresh()
            }))
        },
        initButtons: function() {
            [].slice.call(document.querySelectorAll('[data-kt-buttons="true"]')).map((function(e) {
                var t = e.hasAttribute("data-kt-buttons-target") ? e.getAttribute("data-kt-buttons-target") : ".btn";
                KTUtil.on(e, t, "click", (function(n) {
                    [].slice.call(e.querySelectorAll(t + ".active")).map((function(e) {
                        e.classList.remove("active")
                    })), this.classList.add("active")
                }))
            }))
        },
        initCheck: function() {
            KTUtil.on(document.body, '[data-kt-check="true"]', "change", (function(e) {
                var t = this,
                    n = document.querySelectorAll(t.getAttribute("data-kt-check-target"));
                KTUtil.each(n, (function(e) {
                    "checkbox" == e.type ? e.checked = t.checked : e.classList.toggle("active")
                }))
            }))
        },
        initSelect2: function() {
            [].slice.call(document.querySelectorAll('[data-control="select2"], [data-kt-select2="true"]')).map((function(e) {
                var t = {
                    dir: document.body.getAttribute("direction")
                };
                "true" == e.getAttribute("data-hide-search") && (t.minimumResultsForSearch = 1 / 0), $(e).select2(t)
            }))
        },
        initCountUp: function() {
            n()
        },
        initCountUpTabs: function() {
            n(), window.addEventListener("scroll", n), [].slice.call(document.querySelectorAll('[data-kt-countup-tabs="true"][data-bs-toggle="tab"]')).map((function(e) {
                e.addEventListener("shown.bs.tab", n)
            }))
        },
        initAutosize: function() {
            [].slice.call(document.querySelectorAll('[data-kt-autosize="true"]')).map((function(e) {
                autosize(e)
            }))
        },
        initTinySliders: function() {
            i()
        },
        initSmoothScroll: function() {
            SmoothScroll && new SmoothScroll('a[data-kt-scroll-toggle][href*="#"]', {
                offset: function(e, t) {
                    return e.hasAttribute("data-kt-scroll-offset") ? KTUtil.getResponsiveValue(e.getAttribute("data-kt-scroll-offset")) : 0
                }
            })
        }
    }
}();
KTUtil.onDOMContentLoaded((function() {
    KTApp.init()
})), window.addEventListener("load", (function() {
    KTApp.initPageLoader()
})), "undefined" != typeof module && void 0 !== module.exports && (module.exports = KTApp);
var KTLayoutSearch = function() {
    var e;
    return {
        init: function() {
            (e = document.querySelector("#kt_header_search_modal")) && e.addEventListener("shown.bs.modal", (function() {
                e.querySelector("[autofocus]").focus()
            }))
        }
    }
}();
KTUtil.onDOMContentLoaded((function() {
    KTLayoutSearch.init()
})), "undefined" != typeof module && void 0 !== module.exports && (module.exports = KTLayoutSearch);
var KTLayoutSidebar = function() {
    var e = function(e, t, n, i) {
        var a = document.querySelector(t),
            r = parseInt(KTUtil.css(a, "height"));
        if (a) {
            var o = new ApexCharts(a, {
                    series: [{
                        name: "Profit",
                        data: n
                    }],
                    chart: {
                        fontFamily: "inherit",
                        type: "bar",
                        height: r,
                        toolbar: {
                            show: !1
                        }
                    },
                    plotOptions: {
                        bar: {
                            horizontal: !1,
                            columnWidth: ["30%"],
                            endingShape: "rounded"
                        }
                    },
                    legend: {
                        show: !1
                    },
                    dataLabels: {
                        enabled: !1
                    },
                    stroke: {
                        show: !0,
                        width: 2,
                        colors: ["transparent"]
                    },
                    xaxis: {
                        crosshairs: {
                            show: !1
                        },
                        categories: ["Feb", "Mar", "Apr", "May", "Jun", "Jul"],
                        axisBorder: {
                            show: !1
                        },
                        axisTicks: {
                            show: !1
                        },
                        labels: {
                            style: {
                                colors: "#823FD9",
                                fontSize: "12px"
                            }
                        }
                    },
                    yaxis: {
                        crosshairs: {
                            show: !1
                        },
                        labels: {
                            style: {
                                colors: "#823FD9",
                                fontSize: "12px"
                            }
                        }
                    },
                    states: {
                        normal: {
                            filter: {
                                type: "none",
                                value: 0
                            }
                        },
                        hover: {
                            filter: {
                                type: "none"
                            }
                        },
                        active: {
                            allowMultipleDataPointsSelection: !1,
                            filter: {
                                type: "none",
                                value: 0
                            }
                        }
                    },
                    fill: {
                        opacity: 1
                    },
                    tooltip: {
                        style: {
                            fontSize: "12px"
                        },
                        y: {
                            formatter: function(e) {
                                return "$" + e + "k"
                            }
                        }
                    },
                    colors: ["#661DC5"],
                    grid: {
                        borderColor: "#661DC5",
                        strokeDashArray: 4,
                        yaxis: {
                            lines: {
                                show: !0
                            }
                        }
                    }
                }),
                l = !1,
                s = document.querySelector(e);
            !0 === i && (o.render(), l = !0), s.addEventListener("shown.bs.tab", (function(e) {
                0 == l && (o.render(), l = !0)
            }))
        }
    };
    return {
        init: function() {
            var t, n;
            t = document.querySelector("#kt_user_chart"), n = parseInt(KTUtil.css(t, "height")), t && new ApexCharts(t, {
                series: [74],
                chart: {
                    fontFamily: "inherit",
                    height: n,
                    type: "radialBar"
                },
                plotOptions: {
                    radialBar: {
                        hollow: {
                            margin: 0,
                            size: "78%"
                        },
                        dataLabels: {
                            showOn: "always",
                            name: {
                                show: !1,
                                fontWeight: "700"
                            },
                            value: {
                                color: "#5E6278",
                                fontSize: "30px",
                                fontWeight: "700",
                                offsetY: 6,
                                show: !0,
                                formatter: function(e) {
                                    return e + "%"
                                }
                            }
                        },
                        track: {
                            background: "#00A3FF",
                            strokeWidth: "100%"
                        }
                    }
                },
                colors: ["#F1416C"],
                stroke: {
                    lineCap: "round"
                },
                labels: ["Progress"]
            }).render(), e("#kt_sidebar_tab_1", "#kt_sidebar_tab_1_chart", [40, 30, 25, 40, 50, 30], !1), e("#kt_sidebar_tab_2", "#kt_sidebar_tab_2_chart", [30, 30, 25, 45, 30, 40], !1), e("#kt_sidebar_tab_3", "#kt_sidebar_tab_3_chart", [25, 30, 40, 30, 35, 30], !0), e("#kt_sidebar_tab_4", "#kt_sidebar_tab_4_chart", [25, 30, 35, 40, 50, 30], !1), e("#kt_sidebar_tab_5", "#kt_sidebar_tab_5_chart", [40, 20, 50, 50, 55, 45], !1)
        }
    }
}();
KTUtil.onDOMContentLoaded((function() {
    KTLayoutSidebar.init()
})), "undefined" != typeof module && void 0 !== module.exports && (module.exports = KTLayoutSidebar);
var KTAppInboxCompose = function() {
    var e;
    return {
        init: function() {
            null !== (e = document.querySelector("#kt_inbox_compose")) && (KTAppInboxLib.initEditor(e, "kt_inbox_compose_editor"), KTAppInboxLib.initAttachments(document.querySelector("#kt_inbox_compose_attachments")), KTAppInboxLib.initForm(document.querySelector("#kt_inbox_compose_form")), KTUtil.on(e, '[data-inbox="dismiss"]', "click", (function(t) {
                swal.fire({
                    text: "Are you sure to discard this message ?",
                    type: "danger",
                    buttonsStyling: !1,
                    confirmButtonText: "Discard draft",
                    confirmButtonClass: "btn btn-danger",
                    showCancelButton: !0,
                    cancelButtonText: "Cancel",
                    cancelButtonClass: "btn btn-light-primary"
                }).then((function(t) {
                    new bootstrap.Modal(e).hide()
                }))
            })))
        }
    }
}();
KTUtil.onDOMContentLoaded((function() {
    KTAppInboxCompose.init()
})), "undefined" != typeof module && void 0 !== module.exports && (module.exports = KTAppInboxCompose);
var KTAppInboxLib = {
    initEditor: function(e, t) {
        ! function(e, t) {
            if (e) {
                var n = new Quill("#" + t, {
                        modules: {
                            toolbar: {}
                        },
                        placeholder: "Type message...",
                        theme: "snow"
                    }),
                    i = e.querySelector(".ql-toolbar");
                n = e.querySelector(".ql-editor"), i && KTUtil.addClass(i, "px-5 border-top-0 border-start-0 border-end-0"), n && KTUtil.addClass(n, "px-8")
            }
        }(e, t)
    },
    initForm: function(e) {
        ! function(e) {
            if (e) {
                var t = e.querySelector("[name=compose_to]"),
                    n = (new Tagify(t, {
                        delimiters: ", ",
                        maxTags: 10,
                        blacklist: ["fuck", "shit", "pussy"],
                        keepInvalidTags: !0,
                        whitelist: [{
                            value: "Chris Muller",
                            email: "chris.muller@wix.com",
                            initials: "",
                            initialsState: "",
                            pic: "./assets/media/avatars/150-2.jpg",
                            class: "tagify__tag--primary"
                        }, {
                            value: "Nick Bold",
                            email: "nick.seo@gmail.com",
                            initials: "SS",
                            initialsState: "warning",
                            pic: ""
                        }, {
                            value: "Alon Silko",
                            email: "alon@keenthemes.com",
                            initials: "",
                            initialsState: "",
                            pic: "./assets/media/avatars/150-4.jpg"
                        }, {
                            value: "Sam Seanic",
                            email: "sam.senic@loop.com",
                            initials: "",
                            initialsState: "",
                            pic: "./assets/media/avatars/150-5.jpg"
                        }, {
                            value: "Sara Loran",
                            email: "sara.loran@tilda.com",
                            initials: "",
                            initialsState: "",
                            pic: "./assets/media/avatars/150-1.jpg"
                        }, {
                            value: "Eric Davok",
                            email: "davok@mix.com",
                            initials: "",
                            initialsState: "",
                            pic: "./assets/media/avatars/150-7.jpg"
                        }, {
                            value: "Sam Seanic",
                            email: "sam.senic@loop.com",
                            initials: "",
                            initialsState: "",
                            pic: "./assets/media/avatars/150-5.jpg"
                        }, {
                            value: "Lina Nilson",
                            email: "lina.nilson@loop.com",
                            initials: "LN",
                            initialsState: "danger",
                            pic: "./assets/media/avatars/150-10.jpg"
                        }],
                        templates: {
                            dropdownItem: function(e) {
                                try {
                                    var t = "";
                                    return t += '<div class="tagify__dropdown__item">', t += '   <div class="d-flex align-items-center">', t += '       <span class="symbol sumbol-' + (e.initialsState ? e.initialsState : "") + ' me-2">', t += '           <span class="symbol-label" style="background-image: url(\'' + (e.pic ? e.pic : "") + "')\">" + (e.initials ? e.initials : "") + "</span>", t += "       </span>", t += '       <div class="d-flex flex-column">', t += '           <a href="#" class="text-gray-800 text-hover-primary fw-bold">' + (e.value ? e.value : "") + "</a>", t += '           <span class="text-muted fw-bold">' + (e.email ? e.email : "") + "</span>", t += "       </div>", t += "   </div>", t += "</div>"
                                } catch (e) {}
                            }
                        },
                        transformTag: function(e) {
                            e.class = "tagify__tag tagify__tag--primary"
                        },
                        dropdown: {
                            classname: "color-blue",
                            enabled: 1,
                            maxItems: 5
                        }
                    }), e.querySelector("[name=compose_cc]")),
                    i = (new Tagify(n, {
                        delimiters: ", ",
                        maxTags: 10,
                        blacklist: ["fuck", "shit", "pussy"],
                        keepInvalidTags: !0,
                        whitelist: [{
                            value: "Chris Muller",
                            email: "chris.muller@wix.com",
                            initials: "",
                            initialsState: "",
                            pic: "./assets/media/avatars/150-2.jpg",
                            class: "tagify__tag--primary"
                        }, {
                            value: "Nick Bold",
                            email: "nick.seo@gmail.com",
                            initials: "SS",
                            initialsState: "warning",
                            pic: ""
                        }, {
                            value: "Alon Silko",
                            email: "alon@keenthemes.com",
                            initials: "",
                            initialsState: "",
                            pic: "./assets/media/avatars/150-4.jpg"
                        }, {
                            value: "Sam Seanic",
                            email: "sam.senic@loop.com",
                            initials: "",
                            initialsState: "",
                            pic: "./assets/media/avatars/150-5.jpg"
                        }, {
                            value: "Sara Loran",
                            email: "sara.loran@tilda.com",
                            initials: "",
                            initialsState: "",
                            pic: "./assets/media/avatars/150-1.jpg"
                        }, {
                            value: "Eric Davok",
                            email: "davok@mix.com",
                            initials: "",
                            initialsState: "",
                            pic: "./assets/media/avatars/150-7.jpg"
                        }, {
                            value: "Sam Seanic",
                            email: "sam.senic@loop.com",
                            initials: "",
                            initialsState: "",
                            pic: "./assets/media/avatars/150-5.jpg"
                        }, {
                            value: "Lina Nilson",
                            email: "lina.nilson@loop.com",
                            initials: "LN",
                            initialsState: "danger",
                            pic: "./assets/media/avatars/150-10.jpg"
                        }],
                        templates: {
                            dropdownItem: function(e) {
                                try {
                                    var t = "";
                                    return t += '<div class="tagify__dropdown__item">', t += '   <div class="d-flex align-items-center">', t += '       <span class="symbol sumbol-' + (e.initialsState ? e.initialsState : "") + ' me-2">', t += '           <span class="symbol-label" style="background-image: url(\'' + (e.pic ? e.pic : "") + "')\">" + (e.initials ? e.initials : "") + "</span>", t += "       </span>", t += '       <div class="d-flex flex-column">', t += '           <a href="#" class="text-gray-800 text-hover-primary fw-bold">' + (e.value ? e.value : "") + "</a>", t += '           <span class="text-muted fw-bold">' + (e.email ? e.email : "") + "</span>", t += "       </div>", t += "   </div>", t += "</div>"
                                } catch (e) {}
                            }
                        },
                        transformTag: function(e) {
                            e.class = "tagify__tag tagify__tag--primary"
                        },
                        dropdown: {
                            classname: "color-blue",
                            enabled: 1,
                            maxItems: 5
                        }
                    }), e.querySelector("[name=compose_bcc]"));
                new Tagify(i, {
                    delimiters: ", ",
                    maxTags: 10,
                    blacklist: ["fuck", "shit", "pussy"],
                    keepInvalidTags: !0,
                    whitelist: [{
                        value: "Chris Muller",
                        email: "chris.muller@wix.com",
                        initials: "",
                        initialsState: "",
                        pic: "./assets/media/avatars/150-2.jpg",
                        class: "tagify__tag--primary"
                    }, {
                        value: "Nick Bold",
                        email: "nick.seo@gmail.com",
                        initials: "SS",
                        initialsState: "warning",
                        pic: ""
                    }, {
                        value: "Alon Silko",
                        email: "alon@keenthemes.com",
                        initials: "",
                        initialsState: "",
                        pic: "./assets/media/avatars/150-4.jpg"
                    }, {
                        value: "Sam Seanic",
                        email: "sam.senic@loop.com",
                        initials: "",
                        initialsState: "",
                        pic: "./assets/media/avatars/150-5.jpg"
                    }, {
                        value: "Sara Loran",
                        email: "sara.loran@tilda.com",
                        initials: "",
                        initialsState: "",
                        pic: "./assets/media/avatars/150-1.jpg"
                    }, {
                        value: "Eric Davok",
                        email: "davok@mix.com",
                        initials: "",
                        initialsState: "",
                        pic: "./assets/media/avatars/150-7.jpg"
                    }, {
                        value: "Sam Seanic",
                        email: "sam.senic@loop.com",
                        initials: "",
                        initialsState: "",
                        pic: "./assets/media/avatars/150-5.jpg"
                    }, {
                        value: "Lina Nilson",
                        email: "lina.nilson@loop.com",
                        initials: "LN",
                        initialsState: "danger",
                        pic: "./assets/media/avatars/150-10.jpg"
                    }],
                    templates: {
                        dropdownItem: function(e) {
                            try {
                                var t = "";
                                return t += '<div class="tagify__dropdown__item">', t += '   <div class="d-flex align-items-center">', t += '       <span class="symbol sumbol-' + (e.initialsState ? e.initialsState : "") + ' me-2">', t += '           <span class="symbol-label" style="background-image: url(\'' + (e.pic ? e.pic : "") + "')\">" + (e.initials ? e.initials : "") + "</span>", t += "       </span>", t += '       <div class="d-flex flex-column">', t += '           <a href="#" class="text-gray-800 text-hover-primary fw-bold">' + (e.value ? e.value : "") + "</a>", t += '           <span class="text-muted fw-bold">' + (e.email ? e.email : "") + "</span>", t += "       </div>", t += "   </div>", t += "</div>"
                            } catch (e) {}
                        }
                    },
                    transformTag: function(e) {
                        e.class = "tagify__tag tagify__tag--primary"
                    },
                    dropdown: {
                        classname: "color-blue",
                        enabled: 1,
                        maxItems: 5
                    }
                }), KTUtil.on(e, '[data-inbox="cc-show"]', "click", (function(t) {
                    var n = e.querySelector(".inbox-to-cc");
                    KTUtil.removeClass(n, "d-none"), KTUtil.addClass(n, "d-flex"), e.querySelector("[name=compose_cc]").focus()
                })), KTUtil.on(e, '[data-inbox="cc-hide"]', "click", (function(t) {
                    var n = e.querySelector(".inbox-to-cc");
                    KTUtil.removeClass(n, "d-flex"), KTUtil.addClass(n, "d-none")
                })), KTUtil.on(e, '[data-inbox="bcc-show"]', "click", (function(t) {
                    var n = e.querySelector(".inbox-to-bcc");
                    KTUtil.removeClass(n, "d-none"), KTUtil.addClass(n, "d-flex"), e.querySelector("[name=compose_bcc]").focus()
                })), KTUtil.on(e, '[data-inbox="bcc-hide"]', "click", (function(t) {
                    var n = e.querySelector(".inbox-to-bcc");
                    KTUtil.removeClass(n, "d-flex"), KTUtil.addClass(n, "d-none")
                }))
            }
        }(e)
    },
    initAttachments: function(e) {
        ! function(e) {
            var t = "#" + e.getAttribute("id"),
                n = e.querySelector(".dropzone-item");
            n.id = "";
            var i = n.parentNode.innerHTML;
            n.parentNode.innerHTML = "";
            var a = new Dropzone(t, {
                url: "https://keenthemes.com/scripts/void.php",
                parallelUploads: 20,
                maxFilesize: 1,
                previewTemplate: i,
                previewsContainer: t + " .dropzone-items",
                clickable: t + "_select"
            });
            a.on("addedfile", (function(e) {
                document.querySelector(t + " .dropzone-item").style.display = ""
            })), a.on("totaluploadprogress", (function(e) {
                document.querySelector(t + " .progress-bar").style.width = e + "%"
            })), a.on("sending", (function(e) {
                document.querySelector(t + " .progress-bar").style.opacity = "1"
            })), a.on("complete", (function(e) {
                var n = t + " .dz-complete";
                setTimeout((function() {
                    document.querySelector(n + " .progress-bar, " + n + " .progress").style.opacity = 0
                }), 300)
            }))
        }(e)
    }
};
"undefined" != typeof module && void 0 !== module.exports && (module.exports = KTAppInboxLib);