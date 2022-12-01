-- restourants catalogue
INSERT INTO `catalogue` (`catalogue_id`, `name`, `img_url`, `shop_id`) VALUES 
(NULL, 'Boxes', 'kfc_boxes_1.png', '2'), 
(NULL, 'Combo', 'kfc_combo_1.png', '2'), 
(NULL, 'Drinks', 'drinks_cola.png', '2'),
(NULL, 'Menu', 'bahandi_menu_1.png', '3'), 
(NULL, 'Burger', 'bahandi_burger_1.png', '3'), 
(NULL, 'Drinks', 'drinks_cola.png', '3');

-- grocery catalogue
INSERT INTO `catalogue` (`catalogue_id`, `name`, `img_url`, `shop_id`) VALUES 
(NULL, 'Dairy', 'dairy.png', '4'), 
(NULL, 'Meat', 'meat.webp', '4'), 
(NULL, 'Fish', 'fish.png', '4'), 
(NULL, 'Freezer', 'frozenfood.png', '5'), 
(NULL, 'Bread & bread spreads', 'bread.png', '5'), 
(NULL, 'Dried Goods', 'driedgoods.png', '5'), 
(NULL, 'Snacks', 'snacks.png', '6'), 
(NULL, 'Vegetables and fruit', 'veggies.png', '6'),
(NULL, 'Juices', 'juices.png', '6');

--pharmacy catalogue
INSERT INTO `catalogue` (`catalogue_id`, `name`, `img_url`, `shop_id`) VALUES 
(NULL, 'Drugs and nutraceuticals', 'pills.png', '7'), 
(NULL, 'Medical equipment and products', 'equipment.png', '7'), 
(NULL, 'Sanitation and Hygiene', 'hygiene.png', '7'), 
(NULL, 'Maternal and child products', 'babyproducts.png', '8'), 
(NULL, 'Cosmetics and personal care', 'cosmetics.png', '8'), 
(NULL, 'Sports and Dietary Nutrition', 'diet.png', '8'), 
(NULL, 'Vegan and Organic Food', 'vegan.png', '9'), 
(NULL, 'Optics', 'glasses.webp', '9'),
(NULL, 'Orthodontics', 'braces.png', '9');


-- restaurants data
INSERT INTO `product` (`product_id`, `name`, `price`, `description`,`img_url`, `catalogue_id`) VALUES 
(NULL, 'Menu Cheese Burger Beef x2', '2700.00', 'Double burger, drink, fries, sauce','bahandi_menu_1.png', '7'), 
(NULL, 'Menu Cheese Burger Chicken x2', '2300.00','Double burger, drink, fries, sauce', 'bahandi_menu_2.png', '7'), 
(NULL, 'Menu Mix Cheese Burger x2', '2500.00', 'Double burger assorted, drink, fries, sauce','bahandi_menu_3.png', '7'),
(NULL, 'Cheese Burger Beef x2', '1800.00','2 cutlets', 'bahandi_burger_1.png', '8'),
(NULL, 'Burger Beef x2', '1600.00','2 cutlets', 'bahandi_burger_2.png', '8'),
(NULL, 'Mix Cheese Burger x2', '1700.00','2 assorted cutlets', 'bahandi_burger_3.png', '8'),
(NULL, 'Burger Chicken x2', '1300.00','2 cutlets', 'bahandi_burger_4.png', '8'),
(NULL, 'Coca Cola', '550.00','1l', 'drinks_cola.png', '9'),
(NULL, 'Fuse tea', '400.00','0.5l', 'drinks_fusetea.png', '9'),
(NULL, 'Fanta', '400.00','0.5l', 'drinks_fanta.png', '9'),
(NULL, 'Double Schefburger Original Box', '3590.00','2 strips or 2 sharp wings, an original double cheeseburger, large fries, a drink to choose from, cheese sauce','kfc_boxes_1.png', '4'),
(NULL, 'Double Schefburger Sharp Boxing', '3590.00','2 strips or 2 sharp wings, Double hot burger, large fries, drink of your choice, cheese sauce','kfc_boxes_2.png', '4'),
(NULL, 'ShefTower Original Box', '3440.00','2 strips or 2 sharp wings, Chef Tower original, french fries large, drink to choose from, cheese sauce','kfc_boxes_3.png', '4'),
(NULL, 'Double Schefburger Original Combo', '3050.00','Double Shefburger Original, French fries large, drink to choose from, ketchup','kfc_combo_1.png', '5'),
(NULL, 'Boxmaster Original Combo', '2800.00','Original boxmaster, large French fries, drink of your choice, ketchup','kfc_combo_2.png', '5'),
(NULL, 'Chef Twister Sharp Combo', '2450.00','Chef Twister Spicy, French fries large, drink to choose from, ketchup', 'kfc_combo_3.png', '5'),
(NULL, 'ChefBurger Sharp Combo', '2350.00','Hot shefburger, large French fries, a drink of your choice, ketchup', 'kfc_combo_4.png', '5'),
(NULL, 'Coca Cola', '700.00','1l','drinks_cola.png', '6'),
(NULL, 'Fuse tea', '500.00','0.5l','drinks_fusetea.png', '6'),
(NULL, 'Fanta', '500.00','0.5l','drinks_fanta.png', '6'),
(NULL, 'Pepsi', '500.00','0.5l','drinks_pepsi.png', '6'),
(NULL, 'Water Asu', '400.00','0.5l','drinks_asu.png', '6'),
(NULL, 'Royal Cheeseburger', '1300.00','Juicy, large steak made of 100% beef, sesame bun, Cheddar cheese, pickled cucumbers, fresh onions, ketchup, mustard', 'mac_ind_1.png', '3'),
(NULL, 'Big Mac', '1300.00','Two steaks made of 100% beef on a special Big Mac bun, seasoned with onions, two pieces of pickled cucumbers, a slice of Cheddar cheese, salad, and a special Big Mac sauce', 'mac_ind_2.png', '3'),
(NULL, 'CheeseBurger', '650.00','Burger with cheese', 'mac_ind_3.png', '3'),
(NULL, 'Hamburger', '600.00','Chopped steak made of natural whole beef on a caramelized bun, seasoned with mustard, ketchup, onion and a piece of pickled cucumber', 'mac_ind_4.png', '3'),
(NULL, 'Fuse tea', '450.00','0.5l','drinks_fusetea.png', '2'),
(NULL, 'Fanta', '350.00','0.5l','drinks_fanta.png', '2'),
(NULL, 'Pepsi', '500.00','0.5l','drinks_pepsi.png', '2'),
(NULL, 'Water Asu', '400.00','0.5l','drinks_asu.png', '2');

-- grocery store data
INSERT INTO `product` (`product_id`, `name`, `price`, `description`,`img_url`, `catalogue_id`) VALUES 
(NULL, 'Milk Sour cream Ultrapasteurized 3.2% 950 ml', '1045.00', 'Producing country: Russia
Brand: Buttermilk
The ultrapasteurized milk 3.2% is produced by ultrapasteurization: the milk is heated and cooled in just a few seconds, 
following straight into the sterile container, preserving both taste and nutritional value. ','dairy1.jpg', '11'),
(NULL, 'Alpro Herbal almond beverage 750ml', '1525.00', 'Producing country: Russia
Brand: Alpro
Ingredients: water, sugar, almond paste (roasted almond (100%), tricalcium phosphate (calcium source), salt, stabilizers (carob gum, gellan gum), emulsifier (lecithin (sunflower)).
May contain traces of other nuts, gluten and soy.
Nutritional value (average) per 100 g: fat - 1.1 g; protein - 0.4 g; carbohydrates - 2.4 g, calcium - 120 mg (12% of recommended daily requirement)
Energy value per 100 g: 21 kcal/88 kJ.','alpro.jpg', '11'),
(NULL, 'Sour cream 25% 300 g', '1235.00', 'Producing country: Russia
Brand: Prostokvashino
Sour cream is a natural product prepared according to traditional recipes from fresh fermentation and cream. The product is used as an additive to dumplings and pierogi, salad dressing or an independent sauce. The owners often use sour cream as part of pastry creams, and also add to the gravy for meat, mushrooms and vegetable dishes. Smetana «Prostokvashino» has 5 quality guarantees:
1. Daily care and health of cows
2. Inspection of 80 quality parameters
3. Transport and storage under correct conditions
4. Only cream and sourdough in the composition
5. Taste real sour cream.', 'smetana.jpg', '11'),
(NULL, 'KazMyaso beef goulash chilled in/y kg', '5280.00', 'Producing country: Kazakhstan
Brand: KazMyaso
Beef goulash has a bright color and a slightly sweet taste. With prolonged heat treatment, the beef becomes soft and tender, it is suitable for extinguishing as well as frying in a spice pan. Ready-made goulash is served to various garnishes - pasta, porridge, mashed potatoes and fresh vegetables.', 'meat1.jpg', '12'),
(NULL, 'Minced beef KazMyaso 80/20 chilled in/y kg', '4030.00', 'Producing country: Kazakhstan
Brand: KazMyaso
The ground beef blends perfectly with dough, vegetables, mushrooms, seasonings and greenery. It is the basis for cutlets, meatballs, various rolls and many other dishes. In addition, beef minced meat is used as fillings for dumplings, meatballs, casseroles, peppers, doves, meat sauces and broth.

Product in vacuum package.', 'meat2.jpg', '12'), 
(NULL, 'KazMyaso beef ribs frozen in/out/in kg', '5150.00', 'Producing country: Kazakhstan
Brand: KazMyaso
Beef ribs can be cooked in many ways - boil, fry, grilled, pre-marinated in spices and soy sauce, put out in beer. The ribs are prepared with both a healed plate and cut into pieces with one or two bones. The ribs of the beef blend beautifully with aromatic herbs and spices, honey and ketchup frosting, sweet and sour sauces.

Product in vacuum package. Average product weight from 880 grams to 1.2 kilograms.', 'meat3.jpg', '12'),
(NULL, 'Kingfisher Fish cooled gutted cleaned kg', '6990.00', 'Producing country: Turkey
Brand: Kingfisher
There are many ways to cook fish seabass. Fish can be stewed, roasted, steamed, given in water or burned in oil. Baked seabass in salt tastes great.

The carcass weighs 300-400 grams.', 'fish1.jpg', '13'),
(NULL, 'Trout Santa Bremor topped fillet-piece 200 g', '3720.00', 'Producing country: Belarus
Brand: Santa Bremore
Trout Santa Bremor smoked fillet slice is made from chilled raw materials with the addition of sea salt and rosemary extract. Low salt fish are smoked naturally on alder chips. Large northern trout is a real delicacy.

Tender red meat has a high nutritional value: it contains a large amount of polyunsaturated fatty acids Omega-3 and Omega-6, easily digestible amino acids and protein, vitamins and trace elements. Cut the fillet into thin slices and use for making sandwiches, festive snacks, salads, canapés and other dishes.', 'fish2.jpg', '13'),
(NULL, 'Mattiez herring KingFresh filet low salt 600 gr', '13325.00', 'Country of manufacture: Holland
Brand: Kingfresh
Young herring that has not reached puberty, that is, without caviar and milk, poured in the North Sea and salted according to the classical Dutch recipe is called Matthes. Immediately after the catch, that is, directly on the ship, herring is cleaned from the entrails, hides and bones, fileted, leaving the tail and pancreas, which is the main enzyme for natural preservation of herring. Sea salt is added and the herring fillet is put into the barrels for filling.  Canned herring in this way is a symbol of the state of the Netherlands for many centuries. 
Salted according to the ancient Royal recipe, packed in Rotterdam. 
Herring of Matthies is a very tasty and healthy delicacy, ready for relaxation, without bones and pelts, pure filet. 
Defrost in the refrigerator at a positive temperature for 4-5 hours.', 'fish3.jpg', '13');

(NULL, '', '00.00', '', '', '14'),
(NULL, '', '2700.00', '', '', '14'),
(NULL, '', '2700.00', '', '', '14'),
(NULL, '', '2700.00', '', '', '16'),
(NULL, '', '2700.00', '','', '16'),
(NULL, '', '2700.00', '','', '16'),
(NULL, '', '2700.00', '','', '17'),
(NULL, '', '2700.00', '','', '17'),
(NULL, '', '2700.00', '','', '17'),
(NULL, '', '2700.00', '','', '18'),
(NULL, '', '2700.00', '','', '18'),
(NULL, '', '2700.00', '','', '18'),
(NULL, '', '2700.00', '','', '19'),
(NULL, '', '2700.00', '','', '19');

-- pharmacy data
INSERT INTO `product` (`product_id`, `name`, `price`, `description`,`img_url`, `catalogue_id`) VALUES 
(NULL, '', '2700.00', '','', ''),
(NULL, '', '2700.00', '','', ''),
(NULL, '', '2700.00', '','', ''),
(NULL, '', '2700.00', '','', ''),
(NULL, '', '2700.00', '','', ''), 
(NULL, '', '2700.00', '','', ''),
(NULL, '', '2700.00', '','', ''),
(NULL, '', '2700.00', '','', ''),
(NULL, '', '2700.00', '','', ''),
(NULL, '', '2700.00', '','', ''),
(NULL, '', '2700.00', '','', ''),
(NULL, '', '2700.00', '','', ''),
(NULL, '', '2700.00', '','', ''),
(NULL, '', '2700.00', '','', ''),
(NULL, '', '2700.00', '','', ''),
(NULL, '', '2700.00', '','', ''),
(NULL, '', '2700.00', '','', ''),
(NULL, '', '2700.00', '','', ''),
(NULL, '', '2700.00', '','', ''),
(NULL, '', '2700.00', '','', ''),
(NULL, '', '2700.00', '','', ''),
(NULL, '', '2700.00', '','', ''),
(NULL, '', '2700.00', '','', '');



