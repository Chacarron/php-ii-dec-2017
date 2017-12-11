<?php

$customer1 = new Customer ( 'John Doe' , 'Main Street',' ','Anywhere','SC','99999' );
$customer2 = new Customer ( 'Mary Smith' , 'Side Street', ' ', 'Elsewhere', 'NC', '11111' );

echo $customer1->getCustomerName();
echo $customer2->getCustomerState();
