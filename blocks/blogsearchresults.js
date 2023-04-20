wp.blocks.registerBlockType("ourblocktheme/blogsearchresults", {
    title: "Blog Search Results",
    edit: function () {
        return wp.element.createElement("div", { className: "our-placeholder-block" }, "Blog Search Results Placeholder")
    },
    save: function () {
        return null
    }
})
