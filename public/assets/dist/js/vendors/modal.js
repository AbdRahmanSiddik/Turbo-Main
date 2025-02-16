(() => {
    (function () {
        function d() {
            let t = 9999;
            return (
                $(".modal").each(function () {
                    $(this).css("z-index") !== "auto" &&
                        $(this).css("z-index") > t &&
                        (t = parseInt($(this).css("z-index")));
                }),
                t
            );
        }
        function o(t) {
            return window.innerWidth - $(t)[0].clientWidth;
        }
        function i(t) {
            if (!$("[data-modal-replacer='" + $(t).attr("id") + "']").length) {
                $(
                    '<div data-modal-replacer="' + $(t).attr("id") + '"></div>'
                ).insertAfter(t),
                    $(t).css({ "margin-top": 0, "margin-left": 0 }),
                    $(t).attr("aria-hidden", !1).appendTo("body"),
                    setTimeout(() => {
                        $(t)
                            .addClass("show")
                            .css("z-index", d() + 1);
                        let e = new Event("shown.tw.modal");
                        $(t)[0].dispatchEvent(e);
                    }, 200),
                    $("body")
                        .css(
                            "padding-right",
                            parseInt($("body").css("padding-right")) +
                                o("html") +
                                "px"
                        )
                        .addClass("overflow-y-hidden"),
                    $(".modal")
                        .removeClass("overflow-y-auto")
                        .css("padding-left", "0px"),
                    $(t)
                        .addClass("overflow-y-auto")
                        .css("padding-left", o(t) + "px")
                        .addClass(
                            $(".modal.show").length ? "modal-overlap" : ""
                        );
                let a = new Event("show.tw.modal");
                $(t)[0].dispatchEvent(a);
            }
        }
        function s(t) {
            if ($(t).hasClass("modal") && $(t).hasClass("show")) {
                let a =
                    parseFloat($(t).css("transition-duration").split(",")[1]) *
                    1e3;
                $(t).attr("aria-hidden", !0).removeClass("show"),
                    setTimeout(() => {
                        $(t)
                            .removeAttr("style")
                            .removeClass("modal-overlap")
                            .removeClass("overflow-y-auto"),
                            $(".modal").each(function () {
                                parseInt($(this).css("z-index")) === d() &&
                                    $(this)
                                        .addClass("overflow-y-auto")
                                        .css("padding-left", o(this) + "px");
                            }),
                            d() == 9999 &&
                                $("body")
                                    .removeClass("overflow-y-hidden")
                                    .css("padding-right", ""),
                            $(
                                '[data-modal-replacer="' +
                                    $(t).attr("id") +
                                    '"]'
                            ).replaceWith(t);
                        let l = new Event("hidden.tw.modal");
                        $(t)[0].dispatchEvent(l);
                    }, a);
                let e = new Event("hide.tw.modal");
                $(t)[0].dispatchEvent(e);
            }
        }
        function r(t) {
            $(t).hasClass("modal") && $(t).hasClass("show") ? s(t) : i(t);
        }
        function n(t) {
            return {
                show() {
                    i(t);
                },
                hide() {
                    s(t);
                },
                toggle() {
                    r(t);
                },
            };
        }
        $("body").on("click", '[data-tw-toggle="modal"]', function () {
            i($(this).attr("data-tw-target"));
        }),
            $("body").on("click", (t) => {
                $(t.target).hasClass("modal") &&
                    $(t.target).hasClass("show") &&
                    ($(t.target).data("tw-backdrop") !== "static"
                        ? s(t.target)
                        : ($(t.target).addClass("modal-static"),
                          setTimeout(() => {
                              $(t.target).removeClass("modal-static");
                          }, 600)));
            }),
            $("body").on("click", '[data-tw-dismiss="modal"]', function () {
                let t = $(this).closest(".modal")[0];
                s(t);
            }),
            document.addEventListener("keydown", (t) => {
                if (t.code == "Escape") {
                    let a = $(".modal.show").last();
                    $(a).hasClass("modal") &&
                        $(a).hasClass("show") &&
                        ($(a).data("tw-keyboard") === void 0 ||
                            $(a).data("tw-keyboard") !== "false") &&
                        ($(a).data("tw-backdrop") !== "static"
                            ? s(a)
                            : ($(a).addClass("modal-static"),
                              setTimeout(() => {
                                  $(a).removeClass("modal-static");
                              }, 600)));
                }
            }),
            (function () {
                $(".modal").each(function () {
                    this.__modal = n(this);
                }),
                    window.tailwind === void 0 && (window.tailwind = {}),
                    (window.tailwind.Modal = {
                        getInstance(a) {
                            return a.__modal;
                        },
                        getOrCreateInstance(a) {
                            return a.__modal === void 0 ? n(a) : a.__modal;
                        },
                    });
            })();
    })();
})();
