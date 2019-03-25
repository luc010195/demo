
    <div class="sidebar-filter">
        <div class="sidebar-widget wow fadeInUp">
            <h3 class="section-title" style="font-family: 'regular'; font-size: 18px">Hổ trợ trực tuyến</h3>
            <?php foreach($supports as $row): ?>
                <div class="sidebar-widget-body">
                    <div class="compare-report">
                        <h5 class=""><i class="fa fa-user fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row->name ?></h5>
                    </div>
                    <div class="compare-report">
                        <p><i class="fa fa-envelope fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row->gmail ?></p>
                    </div><!-- /.compare-report -->
                    <div class="compare-report">
                        <p><i class="fa fa-mobile fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row->phone ?></p>
                    </div><!-- /.compare-report -->
                    <div class="compare-report">
                        <p><i class="fa fa-facebook-official fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row->yahoo ?></p>
                    </div><!-- /.compare-report -->
                    <div class="compare-report">
                        <p><i class="fa fa-skype fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row->skype ?></p>
                    </div><!-- /.compare-report -->
                </div><!-- /.sidebar-widget-body -->
            <?php endforeach; ?>
        </div><!-- /.sidebar-widget -->
        <div class="sidebar-widget wow fadeInUp">
            <h3 class="section-title" style="font-family: 'regular'; font-size: 18px">Nhóm facebook</h3>
            <div class="fb-page col-md-11" data-href="https://www.facebook.com/HutechConfessions/?fref=ts" data-tabs="timeline"  data-height="40" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/HutechConfessions/?fref=ts" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/HutechConfessions/?fref=ts">Hutech Confessions</a></blockquote></div>
        </div><!-- /.sidebar-widget -->

    </div><!-- /.sidebar-filter -->

