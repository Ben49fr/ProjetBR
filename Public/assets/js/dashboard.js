var picturePanelTemplate = $(".pictures").find('.picturePanel').first().clone();

picturePanelTemplate.find("input").each(function () {
    $(this).attr('value', '');
});
picturePanelTemplate.find("textarea").each(function () {
    $(this).html('');
});
picturePanelTemplate.find('img.imgmini').attr('src', '');
picturePanelTemplate.find('div.displayedPictureTitle p').html('');


$(".pictures").on("click", ".delPicture", function(){
    $(this).closest(".picturePanel").remove();
    initPanels();
});

$(".addPicture").click(function() {
    var newPicturePanel = picturePanelTemplate.clone();
    $(".pictures").append(newPicturePanel);
    initPanels();
});

initPanels();
function initPanels()
{
    $(".pictures").find('.picturePanel').each(function (key) {
        $(this).find("input, textarea").each(function (index) {
            console.log($(this).attr('name'));
            newName = $(this).attr('name').replace(/(picture\[).*?(\]\[.*?\])/g, "$1"+key+"$2");
            console.log(newName);
            $(this).attr('name', newName);
        });
        $(this).find("a.modifyPicture").attr('href', "#pictureFooter"+key);
        $(this).find("div.collapse").attr('id', "pictureFooter"+key);
    });
}
