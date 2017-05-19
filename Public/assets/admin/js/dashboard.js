jQuery(document).ready(function ($)
{
	switch (location.pathname) {
		case '/projet_brphotographie/admin/galeries/modifier/' :
		case '/projet_brphotographie/admin/galeries/ajouter/' :
			initEditGalleryPage();

	        break;
		default:
			//code block
	}

});

function initEditGalleryPage() {
    console.log('coucou');
}
