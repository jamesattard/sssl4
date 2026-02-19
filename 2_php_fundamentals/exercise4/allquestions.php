<!-- Question 1 -->
<?php
$books = [
    ["title" => "The Great Gatsby", "author" => "F. Scott Fitzgerald", "price" => 10.22],
    ["title" => "1984", "author" => "George Orwell", "price" => 8.36],
    ["title" => "To Kill a Mockingbird", "author" => "Harper Lee", "price" => 12.08],
];
print_r($books);
?>
<!-- Question 2 -->
<?php
function displayBooks($books) {
    echo "<table border='1'>";
    echo "<tr><th>Title</th><th>Author</th><th>Price</th></tr>";
    foreach ($books as $book) {
        echo "<tr>";
        echo "<td>{$book['title']}</td>";
        echo "<td>{$book['author']}</td>";
        echo "<td>€{$book['price']}</td>";
        echo "</tr>";
    }
    echo "</table>";
}

displayBooks($books);
?>
<!-- Question 3 -->
<?php
function calculateTotal($allBooks) {
    $total = 0;
    foreach ($allBooks as $book) {
        $total += $book['price'];
    }
    return $total;
}

echo "Total Price: €" . calculateTotal($books); // Outputs: Total Price: €30.66
?>
<!-- Question 4 -->
<?php
function applyDiscount($total, $isMember) {
    if ($isMember) {
        $total = $total - ($total* 0.1); // Apply 10% discount
    }
    return number_format($total , 2);
}
$isMember = true;  // Example membership status
$total = calculateTotal($books); // Calculate total price
echo ($isMember ? "<br/>Final Price (after discount): €"
 . applyDiscount($total, $isMember) :
         "<br/>Final Price (no discount): €" 
         . applyDiscount($total, $isMember));
?>
<!-- Question 5 -->
<?php
function findMostExpensiveBook($books) {
    $maxPrice = $books[0]["price"];
    $mostExpensiveBook = $books[0];
    $i = 1;

    do {
        if ($books[$i]["price"] > $maxPrice) {
            $maxPrice = $books[$i]["price"];
            $mostExpensiveBook = $books[$i];
        }
        $i++;
    } while ($i < count($books));

    return $mostExpensiveBook;
}

$expensiveBook = findMostExpensiveBook($books);
echo "<br/>Most Expensive Book: $expensiveBook[title] - and it costs €$expensiveBook[price]";
?>
<!-- Question 6 -->
<?php
function generateDropdown($books) {
    echo "<br/><br/><br/><select name='book'>";
    $i = 0;
    while ($i < count($books)) {
        echo "<option value='$books[$i][title]'>{$books[$i]['title']}</option>";
        $i++;
    }
    echo "</select>";
}

generateDropdown($books);
?>


