<?php

class ProductFixture extends CakeTestFixture {

	public $name = 'Product';

	public $import = 'Product';
    public $records = array(
    	//Kofola original
        array(
        	'id' => 1, 
        	'sku' => 'SKU001', 
        	'name' => 'Kofola originál', 
        	'slug' => 'kofola-original', 
        	'short_description' => 'Kofola is a carbonated soft drink produced in the Czech Republic and Slovakia. It is the principal rival of Coca-Cola and Pepsi in these two markets.',
        	'description' => 'Kofola originated in the Czechoslovak pharmaceutical company Galena n.p. (located in Opava) in 1959 during research targeted at finding a possible use for surplus caffeine produced in the process of coffee roasting. The resulting dark-coloured, sweet-and-sour syrup Kofo became the main ingredient of a new soft drink named Kofola introduced in 1962.', 
        	'image_gallery_id' => '1', 
        	'amount' => '100', 
        	'price_id' => '2', 
        	'revision' => '1', 
        	'hidden' => '0',
        	'deleted' => '0',
        	'created' => '2012-05-10 11:00:00', 
        	'updated' => '2012-05-10 11:00:00'
        ),
        //Kofola citrus
        array(
        	'id' => 2, 
        	'sku' => 'SKU002', 
        	'name' => 'Kofola citrus', 
        	'slug' => 'kofola-citrus', 
        	'short_description' => 'Kofola is a carbonated soft drink produced in the Czech Republic and Slovakia. It is the principal rival of Coca-Cola and Pepsi in these two markets.',
        	'description' => 'Kofola originated in the Czechoslovak pharmaceutical company Galena n.p. (located in Opava) in 1959 during research targeted at finding a possible use for surplus caffeine produced in the process of coffee roasting. The resulting dark-coloured, sweet-and-sour syrup Kofo became the main ingredient of a new soft drink named Kofola introduced in 1962.', 
        	'image_gallery_id' => '2', 
        	'amount' => '80', 
        	'price_id' => '3', 
        	'revision' => '1', 
        	'hidden' => '0',
        	'deleted' => '0',
        	'created' => '2012-05-10 11:00:00', 
        	'updated' => '2012-05-10 11:00:00'
        ),
        //Rajec salvia
        array(
        	'id' => 3, 
        	'sku' => 'SKU003', 
        	'name' => 'Rajec šalvia', 
        	'slug' => 'rajec-salvia', 
        	'short_description' => 'Rajecká dolina je od nepamäti symbolom èistej prírody s množstvom lieèivých bylín, ktorá vytvorila prameò kvalitnej a chutnej vody.',
        	'description' => 'Rajecká dolina je od nepamäti symbolom èistej prírody s množstvom lieèivých bylín, ktorá vytvorila prameò kvalitnej a chutnej vody. Okrem osviežujúcej chuti a optimálnej mineralizácie dnes s vodou z Rajeckej doliny objavíte aj poklady viacerých lieèivých bylín.', 
        	'image_gallery_id' => '3', 
        	'amount' => '280', 
        	'price_id' => '4', 
        	'revision' => '1', 
        	'hidden' => '0',
        	'deleted' => '0',
        	'created' => '2012-05-10 11:00:00', 
        	'updated' => '2012-05-10 11:00:00'
        ),
        //Horalky
        array(
        	'id' => 4, 
        	'sku' => 'SKU004', 
        	'name' => 'Horalky', 
        	'slug' => 'horalky', 
        	'short_description' => 'Horalky is a Slovak wafer bar with peanut filling and cocoa coating made by I.D.C. Holding, a.s. under the Sedita brand.',
        	'description' => 'Horalky is a Slovak wafer bar with peanut filling and cocoa coating made by I.D.C. Holding, a.s. under the Sedita brand. It is the best selling wafer of all time in Czech republic and Slovakia.[citation needed] Horalky has been introduced in Poland in 2007 (in 2012 the name was changed to Góralki), and in Hungary late 2008.', 
        	'image_gallery_id' => '4', 
        	'amount' => '1280', 
        	'price_id' => '5', 
        	'revision' => '1', 
        	'hidden' => '0',
        	'deleted' => '0',
        	'created' => '2012-05-10 11:00:00', 
        	'updated' => '2012-05-10 11:00:00'
        ),
        //Horalky deleted
        array(
        	'id' => 5, 
        	'sku' => 'SKU004', 
        	'name' => 'Horalky', 
        	'slug' => 'horalky', 
        	'short_description' => 'Horalky is a Slovak wafer bar with peanut filling and cocoa coating made by I.D.C. Holding, a.s. under the Sedita brand.',
        	'description' => 'Horalky is a Slovak wafer bar with peanut filling and cocoa coating made by I.D.C. Holding, a.s. under the Sedita brand. It is the best selling wafer of all time in Czech republic and Slovakia.[citation needed] Horalky has been introduced in Poland in 2007 (in 2012 the name was changed to Góralki), and in Hungary late 2008.', 
        	'image_gallery_id' => '4', 
        	'amount' => '1280', 
        	'price_id' => '5', 
        	'revision' => '1', 
        	'hidden' => '0',
        	'deleted' => '1',
        	'created' => '2012-05-10 11:00:00', 
        	'updated' => '2012-05-10 11:00:00'
        ),
        //Horalky hidden
        array(
        	'id' => 6, 
        	'sku' => 'SKU004', 
        	'name' => 'Horalky', 
        	'slug' => 'horalky', 
        	'short_description' => 'Horalky is a Slovak wafer bar with peanut filling and cocoa coating made by I.D.C. Holding, a.s. under the Sedita brand.',
        	'description' => 'Horalky is a Slovak wafer bar with peanut filling and cocoa coating made by I.D.C. Holding, a.s. under the Sedita brand. It is the best selling wafer of all time in Czech republic and Slovakia.[citation needed] Horalky has been introduced in Poland in 2007 (in 2012 the name was changed to Góralki), and in Hungary late 2008.', 
        	'image_gallery_id' => '4', 
        	'amount' => '1280', 
        	'price_id' => '5', 
        	'revision' => '1', 
        	'hidden' => '1',
        	'deleted' => '0',
        	'created' => '2012-05-10 11:00:00', 
        	'updated' => '2012-05-10 11:00:00'
        )
    );
}