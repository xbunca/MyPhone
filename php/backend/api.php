<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "password";
    $dbname = "my_phone";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected to DB.";
    } catch (PDOException $e) {
        //echo "Connection failed: " . $e->getMessage();
    }

    function makeAReview($name, $rating, $review, $image)
    {
        global $conn;
        $sql = "INSERT INTO phone_reviews (name, rating, review) VALUES (?,?,?)";
        if ($conn->prepare($sql)->execute([$name, $rating, $review])) {
            $path = '../../assets/imgs/reviews/realReviews/';
            $id = $conn->lastInsertId();
            $image["name"] = $id.".jpg";
            $path = $path.$image["name"];
            move_uploaded_file($image["tmp_name"], $path);
            return true;
        }
        return false;
    }

    function getRandomReview()
    {
        global $conn;
        $sql = "SELECT * FROM phone_reviews ORDER BY RAND() LIMIT 1";

        if ($stmt = $conn->prepare($sql)) {
            if ($stmt->execute()) {
                if ($stmt->rowCount() > 0) {
                    if ($data = $stmt->fetchAll()) {
                        return $data[0];
                    }
                    return 0;
                } else {
                    return 0;
                }
            } else {
                return 0;
            }
            $stmt->close();
        } else {
            return 0;
        }
    }

    function getLikes()
    {
        global $conn;
        $sql = "SELECT * FROM site_likes WHERE likes_dislikes = ?";

        if ($stmt = $conn->prepare($sql)) {
            $stmt->bindValue(1, 'likes');
            if ($stmt->execute()) {
                if ($stmt->rowCount() > 0) {
                    if ($data = $stmt->fetchAll()) {
                        return $data[0]["count"];
                    }
                    return 0;
                } else {
                    return 0;
                }
            } else {
                return 0;
            }
            $stmt->close();
        } else {
            return 0;
        }
    }

    function getDisLikes()
    {
        global $conn;
        $sql = "SELECT * FROM site_likes WHERE likes_dislikes = ?";

        if ($stmt = $conn->prepare($sql)) {
            $stmt->bindValue(1, 'dislikes');
            if ($stmt->execute()) {
                if ($stmt->rowCount() > 0) {
                    if ($data = $stmt->fetchAll()) {
                        return $data[0]["count"];
                    }
                    return 0;
                } else {
                    return 0;
                }
            } else {
                return 0;
            }
            $stmt->close();
        } else {
            return 0;
        }
    }


    function likeSite()
    {
        global $conn;
        $sql = "UPDATE site_likes SET count = count + 1 WHERE likes_dislikes=?";
        if ($conn->prepare($sql)->execute(['likes'])) {
            return true;
        }
        return false;
    }

    function disLikeSite()
    {
        global $conn;
        $sql = "UPDATE site_likes SET count = count + 1 WHERE likes_dislikes=?";
        if ($conn->prepare($sql)->execute(['dislikes'])) {
            return true;
        }
        return false;
    }
?>
