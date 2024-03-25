<a href="https://putlocker-is.org"></a><br>
    <style>
    .mapouter{
        position:relative;
        text-align:right;
        height:659px;
        width:100%;
    }
    .gmap_canvas {
        overflow:hidden;
        background:none!important;
        height:659px;
        width:100%;
    }
</style>
<div class="container">
    <div class="clear-fix my-4"></div>
    <div class="card card-outline card-primary rounded-0 shadow">
        <div class="card-body py-5">
            <h3 class="text-center font-weight-bolder">Contact Information</h3>
            <center>
                <hr class="border-primary bg-primary w-25 border-3" style="opacity:1;height:3px;">
            </center>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <dl>
                        <dt><b>Address</b></dt>
                        <dd class="pl-3"><?= $_settings->info('school_address') ?></dd>
                        <dt><b>Email</b></dt>
                        <dd class="pl-3"><?= $_settings->info('school_email') ?></dd>
                        <dt><b>Telephone #</b></dt>
                        <dd class="pl-3"><?= $_settings->info('school_tel_no') ?></dd>
                        <dt><b>Mobile #</b></dt>
                        <dd class="pl-3"><?= $_settings->info('school_mobile') ?></dd>
                    </dl>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe width="1008" height="659" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d510535.36451769184!2d29.513893389062492!3d-1.4404328999999962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dc776d9092c5c3%3A0xe66c32507670499b!2sCyondo%20TVET%20school!5e0!3m2!1sen!2srw!4v1706454599545!5m2!1sen!2srw" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        </div>
                    </div>
                </div>
              
            </div>
        </div>
    </div>
</div>