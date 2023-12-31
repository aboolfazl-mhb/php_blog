                <?php include('./nav.php'); ?>
                <div class="content flex-column-fluid" id="kt_content">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card card-custom">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        انتشار پست در وبلاگ
                                    </h3>
                                </div>
                                <?php admin_add_post($_POST,$_FILES);?>
                                
                                <form action="" method="post" enctype="multipart/form-data" class="form">
                                    <div class="card-body">
                                        <div class="form-group form-group-last">
                                        </div>
                                        <div class="form-group">
                                            <label>عنوان پست</label>
                                            <input name="post_title" type="text" class="form-control form-control-solid" placeholder="عنوان پست را وارد کنید" required>
                                        </div>
                                        <div class="form-group">
                                            <label>نویسنده پست</label>
                                            <input name="post_author" type="text" class="form-control form-control-solid" placeholder="نام نویسنده را وارد کنید" required>
                                        </div>
                                        <div class="form-group">
                                            <label>انتخاب دسته بندی</label>
                                            <select name="post_category_id" class="form-control form-control-solid" required>
                                                <?php foreach($categories = get_categories() as $cat):?>
                                                <option value="<?=$cat->cat_id?>"><?=$cat->cat_title?></option>
                                                <?php endforeach?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for=""> توضیحات پست</label>
                                            <textarea name="post_body" class="form-control form-control-solid" rows="5"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>تگ های پست</label>
                                            <input name="post_tags" type="text" class="form-control form-control-solid" placeholder="تگ پست را وارد کنید" />
                                        </div>
                                        <div class="form-group">
                                            <label>انتخاب عکس پست</label>
                                            <input id="post_img" name="post_img" type="file" class="form-control form-control-solid" placeholder="تگ پست را وارد کنید" />
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button name="addPost" value="add" type="submit" class="btn btn-primary mr-2">انتشار پست</button>
                                    </div>
                                </form>
                                <!--end::Form-->
                                
                            </div>
                            

                        </div>
                    </div>
                </div>
                <?php include('./footer.php'); ?>