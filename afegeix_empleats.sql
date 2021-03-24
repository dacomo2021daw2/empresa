alter table empleats.empleats modify created_at timestamp not null;
alter table empleats.empleats modify updated_at timestamp not null;
insert into empleats.empleats (nom,email,telefon) values ("Joan Perez Pons", "jpp@gmmail.com","666554433");
insert into empleats.empleats (nom,email,telefon) values ("Rober Capdevila Altamira", "roger.capdevila@fje.edu","666778899");
insert into empleats.empleats (nom,email,telefon) values ("Sergi Lopez Miramon", "slopez@fjeclot.net","934443322");
insert into empleats.empleats (nom,email,telefon) values ("Laia Colomer Gonzalez", "laia.colomer@fje.edu","934445566");
