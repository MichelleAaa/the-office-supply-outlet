wp.blocks.registerBlockType("ourblocktheme/faqlist", {
    title: "FAQ List",
    edit: function () {
        return wp.element.createElement("div", { className: "placeholder-block" }, "FAQ List Placeholder")
    },
    save: function () {
        return null
    }
})

