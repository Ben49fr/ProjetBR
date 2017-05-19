<div class='container'>
    <div class="news">
        <form class="form-group" enctype="multipart/form-data" method="post" action="">
            <!--Liste des news-->
            <?php foreach($news as $key => $new) { ?>
                <div class="panel panel-default">
                    <div class="panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title"><b>News n°<?=$key + 1?></b></h3>
                        </div>
                    </div>
                    <!--Panel fixe-->
                    <div class="pictures">
                        <div class="picturePanel">
                            <input type="hidden" class="form-control" value="<?=isset($new->id) ? $new->id : ''?>" name="new[<?=$key?>][id]"/>
                            <div class="panel-footer">
                                <div class="form-group required-field-block">
                                    <div class="col-md-12 input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-eye-open"></span>
                                        </span>
                                        <input class="pictureTitle" type="text" size="30" value="<?=$new->title?>" class="form-control" placeholder="Titre de la nouvelle" name="new[<?=$key?>][title]">
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
                                        <textarea rows="3" size="30" class="form-control pictureDescription" placeholder="Actualité" name="new[<?=$key?>][content]"><?=$new->content?></textarea>
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
                                                <input type='date' class="form-control pictureDate" placeholder="Date" value="<?=$new->date?>" name="new[<?=$key?>][date]"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="input-group">
                            <div class="input-group-btn">
                                <input value="Valider les modifications" name="modifier" class="btn btn-info" type="submit">
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </form>
    </div>
</div>
