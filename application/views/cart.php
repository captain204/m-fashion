<?php if($this->cart->contents()):?>
<form method="post" action="cart/process">
	<table class="table table-striped">
		<tr>
			<th>Quantity</th>
			<th>Item title</th>
			<th style="text-align: right">Item price</th>
		</tr>
		<?php $i =0;?>
		<?php foreach($this->cart->contents() as $items):?>
		<tr>
			<td><?= $items['qty'];?></td>
			<td><?=$items['name'];?></td>
			<td></td>
			<td style="text-align: right"><?= $this->cart->format_number($items['price']);?></td>
			<?php echo'<input type="hidden" name="item_name['.$i.'] value="'.$items['name'].'"/>';?>
			<?php echo'<input type="hidden" name="item_name['.$i.'] value="'.$items['id'].'"/>';?>
			<?php echo'<input type="hidden" name="item_name['.$i.'] value="'.$items['qty'].'"/>';?>
			<?php $i++;?>
		<?php endforeach;?>
		</tr>
		<tr>
		<td></td>
		<td class="right"><strong>Delivery Fee</strong></td>
		<td class="right"><?php echo $this->config->item('delivery_fee');?></td>
		</tr>
		<tr>

			<td class="right"><strong>Total</strong></td>
			<td class="right" style="text-align: right;"><strong><?php echo$this->cart->format_number($this->cart->total()+$this->config->item('tax'));?></strong></td>
		</tr>
	</table>
	<br>
	<p><a href="<?php echo base_url();?>users/register" class ="btn btn-primary">Create account</a></p>
	<p><em>You must login to make purchases</em></p>
	<h3>Delivery information</h3>
        		   <div class="form-group">
        		   		<label>Address</label>
        		   		<input type="text" name="address" class="form-control">
        		   </div>
        		   <div class="form-group">
        		   		<label>Address2</label>
        		   		<input type="text" name="address_two" class="form-control">
        		   </div>
        		   <div class="form-group">
        		   		<label>City</label>
        		   		<input type="text" name="city" class="form-control">
        		   </div>
        		   <div class="form-group">
        		   		<label>State</label>
        		   		<input type="text" name="state" class="form-control">
        		   </div>
        		   <div class="form-group">
        		   		<label>Phoe number</label>
        		   		<input type="text" name="phone" class="form-control">
        		   </div>
        		   <p><button class="btn btn-primary" type="submit">Checkout</button></p>
  
</form>

<?php endif;?>