<html>
    <head>
        <?php $this->load->view('admin/head')?>
    </head>
    
    <body>
          <div id="rightSide">
                 
                 
                 <!-- Content -->
                 <?php  $this->load->view($temp, $this->data);?>
                 <!-- End content -->     
          </div>
          <div class="clear"></div>
          
    </body>
</html>