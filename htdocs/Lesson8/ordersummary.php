<!DOCTYPE html>
    <html>
    <head>
        <?php
        define("TAX", 0.07);

        class Book {
            private $title,
                    $author,
                    $price;


            public function __construct($title, $author, $price) {
                $this->title = $title;
                $this->author = $author;
                $this->price = $price;
            }

            public function display() {
                return "<h1>Title: $this->title by $this->author, $this->price.</h1>";
            }
            public function get_title() {
                return $this->title;
            }
            public function get_author() {
                return $this->author;
            }
            public function get_price() {
                return $this->price;
            }
        }


            function get_tax($book) {
                return $book->get_price() * TAX;
            }



        $book1 = new Book($_POST['book1title'], $_POST['book1author'], $_POST['book1price']);
        $book1->display($book1);
        $book2 = new Book($_POST['book2title'], $_POST['book2author'], $_POST['book2price']);
        $book2->display($book2);



            function summary($books){
                $subtotal = 0;
                $tax = 0;
                foreach($books as $book){
                    $subtotal += $book->get_price();
                    $tax += get_tax($book);
                }
                $cost_with_tax = $subtotal + $tax;
                echo "<h3>
                        Subtotal: $" . number_format($subtotal, 2) . "<br>" .
                        "Tax: $" . number_format($tax, 2) . "<br>" .
                        "Total: $" . number_format($cost_with_tax, 2);
            }

        ?>
    </head>
    <body>
        <?php
            $books = array($book1, $book2);
            $book1_tax = get_tax($book1);
            $book2_tax = get_tax($book2);
            $book1_cost_with_tax = $book1->get_price() + $book1_tax;
            echo $book1->display();
            echo $book2->display();
            summary($books);
        ?>
    </body>
</html>