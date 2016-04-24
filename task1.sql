SELECT  `clients`.`name` ,  `subsql`.`count_orders` 
FROM (

SELECT  `orders`.`client` , COUNT(  `orders`.`status` )  `count_orders`
FROM  `orders`
WHERE  `orders`.`status` =  'Complete'
GROUP BY  `orders`.`client`
) `subsql` ,  `clients`

WHERE  `subsql`.`count_orders` >4 AND  `subsql`.`client` =  `clients`.`id`
