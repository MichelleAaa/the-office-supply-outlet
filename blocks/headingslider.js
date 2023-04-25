wp.blocks.registerBlockType("ourblocktheme/headingslider", {
    title: "Heading Slider",
    edit: function () {
        return wp.element.createElement("div", { className: "placeholder-block" }, "Blog Search Results Placeholder")
    },
    save: function () {
        return null
    }
})
