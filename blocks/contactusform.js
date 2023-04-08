wp.blocks.registerBlockType("ourblocktheme/contactusform", {
    title: "Contact Us Form",
    edit: function () {
        return wp.element.createElement("div", { className: "our-placeholder-block" }, "Contact Us Form Placeholder")
    },
    save: function () {
        return null
    }
})

// //  Note - Contact Us Form Adapted from: https://wordpress.org/patterns/pattern/contact-us-details-with-form/