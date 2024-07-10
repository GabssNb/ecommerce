<?php if(!class_exists('Rain\Tpl')){exit;} ?><form method="post" action="https://pagseguro.uol.com.br/v2/checkout/payment.html">  
          
          <!-- Campos obrigatórios -->  
          <input name="receiverEmail" type="hidden" value="seilahahaoiblz@gmail.com.br">  
          <input name="currency" type="hidden" value="BRL">  
          
          <?php $counter1=-1;  if( isset($products) && ( is_array($products) || $products instanceof Traversable ) && sizeof($products) ) foreach( $products as $key1 => $value1 ){ $counter1++; ?> 
          <input name="itemId<?php echo htmlspecialchars($counter1+1); ?>" type="hidden" value="<?php echo htmlspecialchars($value1["idproduct"]); ?>">  
          <input name="itemDescription<?php echo htmlspecialchars($counter1+1); ?>" type="hidden" value="<?php echo htmlspecialchars($value1["desproduct"]); ?>">  
          <input name="itemAmount<?php echo htmlspecialchars($counter1+1); ?>" type="hidden" value="<?php echo htmlspecialchars($value1["vltotal"]); ?>">  
          <input name="itemQuantity<?php echo htmlspecialchars($counter1+1); ?>" type="hidden" value="<?php echo htmlspecialchars($value1["nrqtd"]); ?>">  
          <input name="itemWeight<?php echo htmlspecialchars($counter1+1); ?>" type="hidden" value="<?php echo htmlspecialchars($value1["vlweight"]*1000); ?>">  
          <?php } ?>
      
          <input name="reference" type="hidden" value="<?php echo htmlspecialchars($order["idorder"]); ?>">  
            
          <!-- Informações de frete (opcionais) -->  
          <input name="shippingType" type="hidden" value="1">
          <input name="shippingAddressPostalCode" type="hidden" value="<?php echo htmlspecialchars($order["deszipcode"]); ?>">  
          <input name="shippingAddressStreet" type="hidden" value="<?php echo htmlspecialchars($order["desaddress"]); ?>">  
          <input name="shippingAddressNumber" type="hidden" value="<?php echo htmlspecialchars($order["desnumber"]); ?>">  
          <input name="shippingAddressComplement" type="hidden" value="<?php echo htmlspecialchars($order["descomplement"]); ?>">  
          <input name="shippingAddressDistrict" type="hidden" value="<?php echo htmlspecialchars($order["desdistrict"]); ?>">  
          <input name="shippingAddressCity" type="hidden" value="<?php echo htmlspecialchars($order["descity"]); ?>">
          <input name="shippingAddressState" type="hidden" value="<?php echo htmlspecialchars($order["desstate"]); ?>"> 
          <input name="shippingAddressCountry" type="hidden" value="<?php echo htmlspecialchars($order["descountry"]); ?>">  
      
          <!-- Dados do comprador (opcionais) -->  
          <input name="senderName" type="hidden" value="<?php echo htmlspecialchars($order["desperson"]); ?>">  
          <input name="senderAreaCode" type="hidden" value="<?php echo htmlspecialchars($phone["areaCode"]); ?>">  
          <input name="senderPhone" type="hidden" value="<?php echo htmlspecialchars($phone["number"]); ?>">  
          <input name="senderEmail" type="hidden" value="<?php echo htmlspecialchars($order["desemail"]); ?>">  
            
      </form>  
      <script type="text/javascript">
          document.forms[0].submit();
      </script>
      