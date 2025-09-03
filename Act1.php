<?php
//index array
    //product names 
            $productNames = ["Wireless Mouse, Mechanical Keyboard, USB-C Hub, Portable Speaker"];
            $productPrices = [26.99,80.99,35.99,50.99];
    // access product names
    echo "Product Names: " . implode(", ", $productNames) . "<br>";
    // access product prices
    echo "Wireless Mouse : $" . ($productPrices[0] - 1) . "<br>";
    echo "Mechanical Keyboard : $" . ($productPrices[1] - 1) . "<br>";
    echo "USB-C Hub : $" . ($productPrices[2] - 1) . "<br>";
    echo "Portable Speaker : $" . ($productPrices[3] - 1) . "<br>";
    echo "<br>";
    
//associative array
    //product detail    
      $mechanicalKeyboard = [
          "name" => "Mechanical Keyboard",
          "price" => 79.99,
          "brand" => "GadgetGrove",
          "inStock" => true,
          "description" => "A high-quality mechanical keyboard.",
          "warranty" => "2 years"
      ];
       echo "Product Name: " . $mechanicalKeyboard["name"] . "<br>";
       echo "Price: $" . $mechanicalKeyboard["price"] . "<br>";
       echo "Brand: " . $mechanicalKeyboard["brand"] . "<br>";
       echo "In Stock: " . ($mechanicalKeyboard["inStock"] ? "Yes" : "No") . "<br>";
       echo "Description: " . $mechanicalKeyboard["description"] . "<br>";
       echo "Warranty: " . $mechanicalKeyboard["warranty"] . "<br>";
       echo "<br>";
//multidimensional array
      //full catalog
        echo "------------Full Catalog-----<br>";
        echo "<br>";
        $fullCatalog = [
            [
                "id" => 1,
                "name" => "Wireless Mouse",
                "price" => 25.99,
                "inStock" => true
            ],
            [
                "id" => 2,
                "name" => "Mechanical Keyboard",
                "price" => 79.99,
                "inStock" => true
            ],
            [
                "id" => 3,
                "name" => "USB-C Hub",
                "price" => 34.99,
                "inStock" => true
            ],
            [
                "id" => 4,
                "name" => "Portable Speaker",
                "price" => 49.99,
                "inStock" => true
            ]
        ];
        //for each statements
        foreach ($fullCatalog as $product) {
            echo "Product: " . $product["name"] . " ";
            echo "- Price: $" . $product["price"] . " ";
            echo "- In Stock?- " . ($product["inStock"] ? "Yes" : "No") . "<br>";
            echo "<br>";
        }
?>