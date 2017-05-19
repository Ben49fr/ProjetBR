<!--Formulaire de modification de galerie-->

<form class="form-group" enctype="multipart/form-data" method="post" action="">
    <div class="panel panel-default">
        <!--Titre du formulaire-->
        <div class="panel-info">
            <div class="panel-heading">
                <h3 class="panel-title"><b>Modification de la galerie</b></h3>
            </div>
        </div>
        <!--Formulaire-->
        <div class="panel-body">
            <?php if ($gallery->id != "") { ?>
                <input type="hidden" class="form-control" value="<?=$gallery->id?>" name="gallery[id]" id="id_galerie"/>
            <?php } ?>
            <div class="form-group required-field-block">
                <div class="col-md-12 input-group">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-picture"></span>
                    </span>
                    <input type="text" size="30" name="gallery[name]" value="<?=$gallery->name?>" class="form-control" placeholder="Nom de la galerie">
                    <div class="required-icon">
                        <div class="text">*</div>
                    </div>
                </div>
            </div>
            <div class="form-group required-field-block">
                <div class="col-md-12 input-group">
                    <label class="btn btn-default btn-file" style="margin: 7px;">Photo de la catégorie<input name="galleryPicture" type="file" style="display: none;">
                    </label>
                    <img class='imgmini' src="<?=$gallery->getGaleriePicture()?>" alt="" style="max-width:200px;"/>
                </div>
            </div>

            <div class="form-group required-field-block">
                <div class="col-md-12 input-group">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-pencil"></span>
                    </span>
                    <textarea name="gallery[shortDescription]" rows="3" size="30" class="form-control" placeholder="Description la galerie"><?=$gallery->shortDescription?></textarea>
                    <div class="required-icon">
                        <div class="text">*</div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <input class="btn btn-success" type="submit" name="modifier" value="<?=$editMode?>">
            </div>
        </div>
    </div>

    <!--Liste des photos de la galerie-->
    <div class="panel panel-default">
        <!--Titre de la liste-->
        <div class="panel-info">
            <div class="panel-heading">
                <h3 class="panel-title"><b>Liste des photos</b></h3>
            </div>
        </div>
        <!--Panel fixe-->
        <div class="pictures">
            <?php $i = 0; foreach($pictures as $picture) { ?>
                <div class="picturePanel">
                    <input type="hidden" class="form-control" value="<?=isset($picture->id) ? $picture->id : ''?>" name="picture[<?=$i?>][id]"/>
                    <div class="panel-body">
                        <div class="form-group required-field-block">
                            <div class="col-md-2 input-group">
                                <img class='imgmini' src="<?=$picture->getLink()?>" alt=""/>
                            </div>
                            <div class="col-md-8 input-group displayedPictureTitle">
                                <p><?=$picture->title?></p>
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="input-group-btn">
                                <a class="btn btn-success modifyPicture" href="#pictureFooter<?=$i?>" data-toggle="collapse" aria-expended="false" role="button"><span class="glyphicon glyphicon-circle-arrow-down"></span><span> Modifier</span></a>
                                <a class="btn btn-danger delPicture"><span class="glyphicon glyphicon-trash"></span><span> Supprimez</span></a>
                            </div>
                        </div>
                    </div>
                    <!--Panel ouvrant-->
                    <div class="panel-footer collapse" id="pictureFooter<?=$i?>">
                        <div class="form-group required-field-block">
                            <div class="col-md-12 input-group">
                                <label class="btn btn-default btn-file pictureFile" style="margin: 7px;">Parcourir<input name="picture[<?=$i?>][file]" type="file" style="display: none;">
                                </label>
                            </div>
                        </div>
                        <div class="form-group required-field-block">
                            <div class="col-md-12 input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-picture"></span>
                                </span>
                                <input class="pictureTitle" type="text" size="30" value="<?=$picture->title?>" class="form-control" placeholder="Titre de la photo" name="picture[<?=$i?>][title]">
                                <div class="required-icon">
                                    <div class="text">*</div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group required-field-block">
                            <div class="col-md-12 input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-pencil"></span>
                                </span>
                                <textarea rows="3" size="30" class="form-control pictureDescription" placeholder="Description la galerie" name="picture[<?=$i?>][description]"><?=$picture->description?></textarea>
                                <div class="required-icon">
                                    <div class="text">*</div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group required-field-block">
                            <div class="col-md-12 input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-map-marker"></span>
                                </span>
                                <input type="text" size="30" value="<?=$picture->place?>" class="form-control picturePlace" placeholder="Lieu" name="picture[<?=$i?>][place]">
                                <div class="required-icon">
                                    <div class="text">*</div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group required-field-block">
                            <div class="col-md-12 input-group">
                                <div class="form-group">
                                    <div class='input-group date' id='datetimepicker1'>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                        <input type='date' class="form-control pictureDate" placeholder="Date" value="<?=$picture->date?>" name="picture[<?=$i?>][date]"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php $i++;  } ?>
        </div>
        <div class="panel-footer">
            <div class="input-group">
                <div class="input-group-btn">
                    <a class="btn btn-success addPicture"><span class="glyphicon glyphicon-plus"></span><span> Ajoutez une photo</span></a>
                </div>
            </div>
            <div class="input-group">
                <div class="input-group-btn">
                    <input value="Valider les photos" name="modifier" class="btn btn-info" type="submit">
                </div>
            </div>
        </div>
    </div>
</form>
