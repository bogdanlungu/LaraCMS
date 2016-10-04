let confirmModule = {
    init: () => {
        let deletePageButton = $(".deletePageButton");

        deletePageButton.on("click", function(e) {
            e.preventDefault();
            let pageId = $(this).data("page"),
                pageTitle = $(this).data("title");

            let res = confirm("Are you sure you want to delete the page: " + pageTitle);
            if (res) {
                var deleteUrl = '/admin/deletePage/' + pageId;
                window.location.replace(deleteUrl);
            } else {
                console.log("The user aborted");
            }
        });
    }
}
$(document).ready(confirmModule.init);
