-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 05, 2023 at 10:07 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentalcar_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `car_id` int(11) NOT NULL,
  `category_id` int(4) DEFAULT NULL,
  `image` varchar(1000) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `make` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `year` year(4) NOT NULL,
  `amount` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`car_id`, `category_id`, `image`, `description`, `price`, `make`, `model`, `year`, `amount`) VALUES
(1, 2, 'https://img2.carmax.com/assets/23874310/hero.jpg?width=2400&ratio=16/9', 'The five-seat Fiesta is Ford\'s subcompact car, and it\'s available in sedan and four-door hatchback body styles. Power comes from a 120-horsepower, 1.6-liter four-cylinder engine that pairs with a five-speed manual or six-speed dual-clutch automatic transmission.', '44.99', 'Ford', 'Fiesta', 2019, 1),
(2, 2, 'https://img2.carmax.com/assets/23868166/hero.jpg?width=2400&ratio=16/9', 'This family-friendly 4-door hatchback is America’s best-selling hybrid. The 2018 Toyota Prius has a well-earned reputation for safety and reliability, plus it continues to deliver industry-leading fuel economy. The 2018 Prius offers radical futuristic styling, a refined interior with room for five and it has earned a Top Safety Pick+ rating from the Insurance Institute for Highway Safety. ', '44.99', 'Toyota', 'Prius', 2018, -5),
(3, 14, 'https://img2.carmax.com/assets/23681283/hero.jpg?width=2400&ratio=16/9', 'A true display of unbridled driving bliss, the 718 Cayman is assembled with a mid-engine layout along with rear-wheel drive for a perfected combination of agile handling and athletic acceleration. Featuring your choice of turbocharged 4-cylinders or naturally aspirated inline 6-cylinder engines — the 718 Cayman is perfectly suited to all types of driving styles. ', '89.99', 'Porsche', '718 Cayman', 2018, 2),
(4, 13, 'https://img2.carmax.com/assets/22988543/hero.jpg?width=2400&ratio=16/9', 'The 2018 Tesla Model X is an electric-powered SUV that has a need for speed. Trims like the range-topping P100D have the straight-line performance to rival the world’s fastest supercars. When equipped with the optional Ludicrous drive mode, this five-passenger EV needs less than 3.0 seconds to sprint from zero to 60 mph. ', '89.99', 'Tesla', 'Model X', 2018, 5),
(5, 11, 'https://img2.carmax.com/assets/23946872/hero.jpg?width=2400&ratio=16/9', 'The Ford Ranger is a mid-size pickup truck that seats up to five and competes with the Toyota Tacoma, Nissan Frontier and Chevrolet Colorado. Unlike the majority of pickups, the Ranger is offered with only one engine: a 270-horsepower, turbocharged 2.3-liter four-cylinder that works with a 10-speed automatic transmission. ', '49.99', 'Ford', 'Ranger XL', 2021, 5),
(6, 8, 'https://img2.carmax.com/assets/23156885/hero.jpg?width=2400&ratio=16/9', 'The 2020 Hyundai Elantra GT is a tidy and efficient package with clean, elegant design, but the GT suffix promises a bit more sportiness than it can deliver. It is not a particularly quick car. Instead, the base car with its mandatory six-speed automatic transmission is more in the mold of the highly lauded Volkswagen Golf—which, in our opinion, is one of the best hatchbacks you can buy.', '49.99', 'Dodge', 'Grand Caravan', 2020, 5),
(7, 9, 'https://img2.carmax.com/assets/24003428/hero.jpg?width=2400&ratio=16/9', 'Larger than the Jeep Renegade but smaller than the Cherokee, the Compass is sized to fit between the subcompact and compact SUV segments. The current second-generation Compass was introduced for the 2017 model year and wears styling inspired by classic Jeep models. ', '49.99', 'Jeep', 'Compass', 2021, 5),
(8, 9, 'https://img2.carmax.com/assets/23768039/hero.jpg?width=2400&ratio=16/9', 'The redesigned 2022 MDX houses a 290-HP81 V-6 engine paired to a double-wishbone front suspension for precision cornering. For even more exhilaration, the MDX Type S features an available 355-hp Turbo V6 engine and available air suspension that thrills with every drive. ', '54.99', 'Acura', 'MDX', 2022, 5),
(9, 14, 'https://img2.carmax.com/assets/23298737/hero.jpg?width=2400&ratio=16/9', 'Shift it up a notch with the 2022 Toyota GR Supra. This sleek, powerful sports car comes in a variety of eye-catching colors and is built for performance.', '59.99', 'Toyota', 'Supra 2.0', 2022, 5),
(10, 3, 'https://img2.carmax.com/assets/23816988/hero.jpg?width=2400&ratio=16/9', 'With eye-catching new exterior styling, Symmetrical All-Wheel Drive, and a spacious, comfortable interior, the 2023 Legacy is the world\'s leading midsize sedan.', '44.99', 'Subaru', 'Legacy', 2020, 5),
(11, 11, 'https://img2.carmax.com/assets/23906353/hero.jpg?width=2400&ratio=16/9', 'The 2021 Jeep Gladiator is a mid-size crew-cab pickup truck with room for up to five people. Its standard engine is a 285-horsepower, 3.6-liter V-6 that works with a six-speed manual or eight-speed automatic transmission. The newly available turbo-diesel V-6, meanwhile, teams with an eight-speed automatic.', '49.99', 'Jeep', 'Gladiator', 2021, 5),
(12, 12, 'https://img2.carmax.com/assets/23859037/hero.jpg?width=2400&ratio=16/9', 'The 2022 Ford Mustang features next-level performance with 5 impressive engines to choose from including the first EcoBoost® engine powered by Ford Performance.', '89.99', 'Ford', 'Mustang GT', 2022, 5),
(13, 2, 'https://img2.carmax.com/assets/23588602/hero.jpg?width=2400&ratio=16/9', 'The Mazda3 2.5 Turbo Sedan with Premium Plus Package enables you to enjoy a new form of indulgence. Its leather-trimmed interior and aluminum speaker grilles have been crafted to visually represent the crisp sounds and brilliant clarity of our bespoke Bose® 12-speaker audio system.', '64.99', 'Mazda', '3', 2021, 5),
(14, 9, 'https://img2.carmax.com/assets/23422019/hero.jpg?width=2400&ratio=16/9', 'Big, comfy, classy — and impressively loaded with technology and luxury touches for less money than you’d expect — the new 2020 Kia Telluride is a triumph.', '49.99', 'Kia', 'Telluride EX', 2020, 5),
(15, 13, 'https://img2.carmax.com/assets/23389589/hero.jpg?width=2400&ratio=16/9', 'Skip the gas station and enjoy the convenience of charging at home and on the go. The Dual Level Charge Cord allows you to charge from the comfort of your own home. Conveniently charge on your time from the grocery store, work, the gym and more. Plus, the myChevrolet Mobile App with Energy Assist*, makes charging your electric car quick and easy.', '59.99', 'Chevy', 'Bolt EV Premier', 2020, 5),
(16, 10, 'https://img2.carmax.com/assets/24033340/hero.jpg?width=2400&ratio=16/9', 'The 2020 Nissan NV200 is a basic compact van with a small footprint and an affordable price. Best for companies on tight budgets, the NV200 may not be as large or as sophisticated as the Ford Transit Connect, Mercedes-Benz Metris or Ram ProMaster City, but it can still haul 122.7 cubic feet of cargo and up to 1,480 pounds of payload for less than $24,000.', '49.99', 'Nissan', 'NV200', 2020, 5),
(17, 7, 'https://img2.carmax.com/assets/23829962/hero.jpg?wwidth=2400&ratio=16/9', 'The S-Class has long been the best-seller among large luxury sedans, and Mercedes-Benz is introducing a fully redesigned seventh-generation model for 2021. to the 2021 S-Class will compete against segment contenders including the BMW 7 Series, Audi A8, Lexus LS, Genesis G90, and Tesla Model S.', '89.99', 'Mercedes-Benz', 'S560', 2018, 4),
(19, 7, 'https://img2.carmax.com/assets/23717617/hero.jpg?width=2400/ratio=16/9', 'The 2019 Kia K900 is an all-new vehicle for 2019, now based on a lengthened and widened version of the outstanding chassis that underpins the Kia Stinger. This big new Korean luxury sedan is powered by a twin-turbo 3.3-liter V6 that sends power to all four wheels via an 8-speed automatic transmission with paddle shifters.', '89.99', 'Kia', 'K900 Luxury', 2019, 4),
(21, 15, 'https://img2.carmax.com/assets/23694267/hero.jpg?width=2400&&ratio16/9', 'If you drive a 2014 Porsche Boxster, chances are you won\'t want to return the key. Compact dimensions, a midengine layout and Porsche\'s usual suspension-tuning magic join forces to produce some of the best road manners in all of autodom.', '89.99', 'Porsche\r\n', 'Boxster S', 2014, 4);

-- --------------------------------------------------------

--
-- Table structure for table `car_categories`
--

CREATE TABLE `car_categories` (
  `category_id` int(11) NOT NULL,
  `category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car_categories`
--

INSERT INTO `car_categories` (`category_id`, `category`) VALUES
(1, 'Economy'),
(2, 'Compact'),
(3, 'Midsize'),
(4, 'Standard'),
(5, 'Full-size'),
(6, 'Premium'),
(7, 'Luxury'),
(8, 'Minivan'),
(9, 'SUV'),
(10, 'Van'),
(11, 'Pickup'),
(12, 'Roadster'),
(13, 'Electric'),
(14, 'Sports'),
(15, 'Convertible'),
(16, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `car_users`
--

CREATE TABLE `car_users` (
  `car_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car_users`
--

INSERT INTO `car_users` (`car_id`, `user_id`) VALUES
(2, 14),
(3, 9),
(3, 14),
(4, 9),
(4, 14),
(10, 9),
(13, 9),
(17, 9);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(45) NOT NULL,
  `email` varchar(50) NOT NULL,
  `car_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `username`, `password`, `fullname`, `email`, `car_id`) VALUES
(1, 'mcool', '111', 'Matt Cool', 'matt@gmail.com', 4),
(2, 'scasada', '222', 'Steven Casada', 'steven@gmail.com', 6),
(3, 'jwinbush', '333', 'Jawon Winbush', 'jawon@gmail.com', 5),
(4, 'carguy', 'carguy2022', 'Peter Wayne', 'peter@gmaiil.com', 5),
(5, 'blue', 'blue2022', 'Bruce Parker', 'bruce@gmail.com', 7),
(6, 'jimmy', 'jimmy2022', 'Jimmy Neutron', 'jneutron@gmail.com', 4),
(7, 'billygoat', 'billy2022', 'Billy Scotts', 'bscotts@gmail.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `inventory_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `amount` decimal(3,1) NOT NULL,
  `pickupDate` date NOT NULL,
  `returnDate` date NOT NULL,
  `pickupLocation` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`inventory_id`, `car_id`, `amount`, `pickupDate`, `returnDate`, `pickupLocation`) VALUES
(1, 5, '15.0', '2022-11-08', '2022-11-17', '7800 Col. H. Weir Cook Memorial Dr, Indianapolis, IN 46241'),
(2, 6, '15.0', '2022-11-08', '2022-11-17', '7800 Col. H. Weir Cook Memorial Dr, Indianapolis, IN 46241');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(55) NOT NULL,
  `lastname` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `isAdmin` varchar(55) NOT NULL,
  `car_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `email`, `password`, `isAdmin`, `car_id`) VALUES
(5, 'Jawon', 'Winbush', 'fake@gmail.com', '333', 'yes', NULL),
(6, 'Jawon', 'Winbush', 'hello@gmail.com', '555', 'yes', NULL),
(9, 'Jawon', 'Winbush', 'jawonwinbush@gmail.com', '111', 'yes', NULL),
(10, 'Jawon', 'Winbush', 'trying@gmail.com', '111', 'yes', NULL),
(11, 'Jawon', 'Winbush', 'fake@gmail.com', '111', 'yes', NULL),
(12, 'Jawon', 'Winbush', 'yessir@gmail.com', '111', 'yes', NULL),
(13, 'ran', 'chang', 'ranchang@gmail.com', '2222', 'yes', NULL),
(14, 'Jay', 'Winbush', 'jay@gmail.com', '111', 'yes', NULL),
(15, 'Jawon', 'Winbush', 'jawonwinbush@gmail.com', '111', 'yes', NULL),
(16, 'Jawon', 'Winbush', 'hey1@gmail.com', '222', 'yes', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`car_id`),
  ADD KEY `FK_cars_category_id` (`category_id`);

--
-- Indexes for table `car_categories`
--
ALTER TABLE `car_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `car_users`
--
ALTER TABLE `car_users`
  ADD PRIMARY KEY (`car_id`,`user_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `FK_customers_car_id` (`car_id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`inventory_id`),
  ADD KEY `FK_inventory_car_id` (`car_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `FK_cars_car_id` (`car_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `car_categories`
--
ALTER TABLE `car_categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `inventory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `FK_cars_category_id` FOREIGN KEY (`category_id`) REFERENCES `car_categories` (`category_id`);

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `FK_customers_car_id` FOREIGN KEY (`car_id`) REFERENCES `cars` (`car_id`);

--
-- Constraints for table `inventory`
--
ALTER TABLE `inventory`
  ADD CONSTRAINT `FK_inventory_car_id` FOREIGN KEY (`car_id`) REFERENCES `cars` (`car_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_cars_car_id` FOREIGN KEY (`car_id`) REFERENCES `car_users` (`car_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
