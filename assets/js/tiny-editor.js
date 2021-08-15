tinymce.init({
    selector: "textarea#editor",
    skin: "bootstrap",
    plugins: "lists, link, image, media",
    toolbar: "undo redo | formatselect | bold italic underline | alignleft aligncenter alignright alignjustify | indent outdent | strikethrough blockquote bullist numlist backcolor | link image media | removeformat help",
    menubar: false,
    setup: (editor) => {
        // Apply the focus effect
        editor.on("init", () => {
            editor.getContainer().style.transition =
                "border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out";
        });
        editor.on("focus", () => {
            (editor.getContainer().style.boxShadow =
                "0 0 0 .2rem rgba(0, 123, 255, .25)"),
                (editor.getContainer().style.borderColor = "#80bdff");
        });
        editor.on("blur", () => {
            (editor.getContainer().style.boxShadow = ""),
            (editor.getContainer().style.borderColor = "");
        });
    },
});