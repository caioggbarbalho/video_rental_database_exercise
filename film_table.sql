create database sql_exercise;
use sql_exercise;

CREATE TABLE IF NOT EXISTS `film_table` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(80) NOT NULL,
    `genero` VARCHAR(80) NOT NULL,
    `sinopse` TEXT NOT NULL,
    `diretor` VARCHAR(80) NOT NULL,
    `data` DATE NOT NULL,
    `nota` DECIMAL(10,2) NOT NULL,
    `imagem` VARCHAR(50) NOT NULL,
    PRIMARY KEY (`id`)
);

INSERT INTO `film_table` (`nome`, `genero`, `sinopse`, `diretor`, `data`, `nota`, `imagem`) VALUES
('Homem-Aranha no Aranhaverso', 'Ação e Aventura', 'Miles Morales, o amigão da vizinhança Homem-Aranha, é transporado através do multiverso para unir forças com Gwen Stacy e um novo time de Pessoas-Aranha para enfrentar um vilão mais poderoso do que qualquer coisa que já tenham encontrado.', 'Joaquim Dos Santos, Kemp Powers e Justin K. Thompson', '2023-06-01', '8.7', 'spiderverse.png'),
('Barbie', 'Feminismo', 'Viver na Terra da Barbie é ser um ser perfeito em um lugar perfeito. A menos que você tenha uma crise existencial completa. Ou que você seja um Ken.', 'Greta Gerwig', '2023-07-20', '7.0', 'barbie.png'),
('Silêncio dos Inocentes','Policial, Drama e Suspense','Uma jovem deve receber a ajuda de um assassino canibal manipulador e preso para ajudar a capturar outro assassino em série, um louco que ataca suas vítimas.','Jonathan Demme','1991-05-17','8.7', 'inocentes.png'),
('Interestelar','Ficção científica, Drama e Aventura','Uma equipe de exploradores viaja através de um buraco de minhoca no espaço, na tentativa de garantir a sobrevivência da humanidade.','Christopher Nolan','2014-11-06','8.7', 'interestelar.png'),
('Clube da Luta','Drama ','Um trabalhador de escritório e um fabricante de sabonetes formam um clube de luta clandestino que evolui para algo muito maior.','David Fincher','1999-10-29','8.8','clubeluta.png'),
('Batman - O Cavaleiro das Trevas','Ação, Policial e Drama','Agora com a ajuda do tenente Jim Gordon e do promotor público Harvey Dent, Batman tem tudo para banir o crime de Gotham City de uma vez por todas. Mas em breve, os três serão vítimas do Coringa, que pretende lançar Gotham em uma anarquia.','Christopher Nolan','2008-07-18','9.0','batman.png'),
('Um Amor para Recordar', 'Romance', 'Um jovem delinquente do ensino médio é obrigado a ser o tutor de uma escola de baixa renda. Lá, ele se apaixona pela filha do pastor e vive uma paixão cheia de diferenças e surpresas', 'Adam Shankman', '2002-01-25', '7.3', 'amor.png'),
('A Origem', 'Ficção Científica', 'Um ladrão que rouba segredos corporativos através do uso de tecnologia de partilha de sonhos recebe a tarefa inversa de plantar uma ideia na mente de um CEO, mas o seu passado trágico pode condenar o projeto e a sua equipa ao desastre.', 'Christopher Nolan', '2010-08-06', '8.8', 'origem.png'),
('Extraordinário', 'Drama','Baseado no best-seller do New York Times, este filme conta a história incrivelmente inspiradora e comovente de August Pullman, um menino com diferenças faciais que entra na quinta série, frequentando pela primeira vez uma escola primária regular.', 'Stephen Chbosky', '2017-12-07' ,'7.9', 'extra.png'),
('Truque de mestre o 2º ato' , 'Ação', 'Os Quatro Cavaleiros ressurgem e são recrutados à força por um gênio da tecnologia para realizar seu assalto mais impossível.', 'Jon M. Chu', '2016-06-09', '6.4', 'truque.png'),
('Divertidamente', 'Animação/Comédia', 'Depois que a jovem Riley é arrancada de sua vida no Meio-Oeste e se muda para São Francisco, suas emoções - Alegria, Medo, Raiva, Nojo e Tristeza - entram em conflito sobre a melhor forma de navegar em uma nova cidade, casa e escola.','Pete Docter/Ronnie Del Carmen', '2015-06-18' ,'8.1', 'divertidamente.png'),
('Jurassic Park', 'Aventura', 'Durante um tour o parque sofre falta de energia eléctrica o que faz que um dinossauro clonado saia do seu claustro.', 'Steven Spielberg', '1993-06-13', '8.2', 'jurassic.png');