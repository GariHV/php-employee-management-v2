-- Banco de dados: `mvc_advanced`
--

-- --------------------------------------------------------
DROP DATABASE IF EXISTS mvc_advanced;
CREATE DATABASE mvc_advanced;
USE mvc_advanced;
--
-- Estrutura da tabela `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `gender_id` int(11) NOT NULL,
  `age` int(2) DEFAULT NULL,
  `phone_number` int(9) NOT NULL,
  `city` varchar(50) DEFAULT NULL,
  `street_address` varchar(100) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `postal_code` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `employees`
--

INSERT INTO `employees` (`id`, `name`, `last_name`, `email`, `gender_id`, `age`, `phone_number`, `city`, `street_address`, `state`, `postal_code`) VALUES
(1, 'Rack', 'Lei', 'jackon@network.com', 1, 24, 738362767, 'San Jone', '126', 'CA', 39221),
(2, 'John', 'Doe', 'jhondoe@foo.com', 1, 34, 638362767, 'New York', '126', 'CA', 39221),
(3, 'Leila', 'Mills', 'mills@leila.com', 2, 26, 638362767, 'San Diego', '126', 'CA', 39671),
(4, 'Richard', 'Desmond', 'dismond@foo.com', 1, 30, 638362767, 'New York', '126', 'CA', 85716),
(5, 'Susan', 'Smith', 'susanmith@baz.com', 2, 28, 638362767, 'New York', '126', 'CA', 9563),
(6, 'Brad', 'Simpson', 'brad@foo.com', 1, 40, 638362767, 'Atlanta', '126', 'GEO', 1928),
(7, 'Neil', 'Walker', 'walkerneil@baz.com', 1, 38, 638362767, 'New York', '126', 'CA', 17345),
(8, 'Rack', 'Jackon', 'rack@network.com', 1, 22, 638362767, 'New York', '126', 'CA', 68573),
(9, 'Homer', 'Eustasio', 'homer@gmail.com', 1, 34, 638362767, 'New York', '126', 'CA', 9857),
(10, 'Sandra', 'Foo', 'sandra@foo.com', 2, 34, 638362767, 'New York', '126', 'CA', 9274);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `gender_id` (`gender_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`gender_id`) REFERENCES `genders` (`id`);
COMMIT;
