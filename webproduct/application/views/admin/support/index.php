<!-- head -->

<div class="line"></div>

<div id="main_slide" class="wrapper">
	<div class="widget">
	
		<div class="title">
			<span class="titleIcon"><input type="checkbox" name="titleCheck" id="titleCheck"></span>
			<h6>
				Thông tin liên hệ của của hàng
			</h6>
		 	
		</div>
		
		<table width="100%" cellspacing="0" cellpadding="0" id="checkAll" class="sTable mTable myTable">
			
			<thead>
				<tr>
					<td style="width:21px;"><img src="<?php echo public_url('admin/images')?>/icons/tableArrows.png"></td>
					<td style="width:120px;">Tên</td>
					<td style="width:120px;">Yahoo</td>
					<td style="width:120px;">Email</td>
					<td style="width:120px;">Skeyper</td>
					<td style="width:120px;">Phone</td>
					<td style="width:120px;">Chỉnh sửa</td>
				</tr>
			</thead>
			
			<tbody class="list_item">
			    <?php foreach ($list as $row):?>
			    <tr class="row_<?php echo $row->id?>">
					
					<td class="textC"><?php echo $row->id?></td>
					
					<td>						
						<a target="_blank" title="" class="tipS" href="">
					    	<?php echo $row->name?>
						</a>
					</td>

					<td class="textC">
						<?php echo $row->yahoo?>	
					</td>

					<td class="textC">
						<?php echo $row->gmail?>
							
					</td>

					<td class="textC">
						<?php echo $row->skype?>							
					</td>

					<td class="textC">
						<?php echo $row->phone?>							
					</td>

					<td class="option textC">
						 
						 
						 <a class="tipS" title="Chỉnh sửa" href="<?php echo admin_url('support/edit/'.$row->id)?>">
							<img src="<?php echo public_url('admin/images')?>/icons/color/edit.png">
						</a>
						
					</td>
				</tr>
				<?php endforeach;?>
		   </tbody>
			
		</table>
	</div>
	
</div>


