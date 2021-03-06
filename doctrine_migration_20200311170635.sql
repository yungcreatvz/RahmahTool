-- Doctrine Migration File Generated on 2020-03-11 17:06:35

-- Version 20200220172921
CREATE TABLE classe (id INT AUTO_INCREMENT NOT NULL, cm2 LONGTEXT NOT NULL, hifz1 LONGTEXT NOT NULL, hifz2 LONGTEXT NOT NULL, hifz3 LONGTEXT NOT NULL, hifz4 LONGTEXT NOT NULL, hifz5 LONGTEXT NOT NULL, moyenne_section LONGTEXT NOT NULL, petite_section LONGTEXT NOT NULL, toute_petite_section LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;
CREATE TABLE cm2 (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;
CREATE TABLE eleve (id INT AUTO_INCREMENT NOT NULL, matricule LONGTEXT NOT NULL, prenoms LONGTEXT NOT NULL, nom LONGTEXT NOT NULL, pays_de_naissance LONGTEXT NOT NULL, lieu_de_naissance LONGTEXT NOT NULL, date_de_naissance DATE NOT NULL, sexe LONGTEXT NOT NULL, adresse_de_residence LONGTEXT NOT NULL, telephone_domicile INT NOT NULL, telephone_eleve INT DEFAULT NULL, annee_darrivee DATE NOT NULL, parent_resident LONGTEXT NOT NULL, autre_parent_resident LONGTEXT DEFAULT NULL, petit_frere_ou_soeur LONGTEXT DEFAULT NULL, frere_ou_soeur LONGTEXT DEFAULT NULL, preference_manuel LONGTEXT NOT NULL, tolerence_paracetamol LONGTEXT NOT NULL, maladie_signale LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;
CREATE TABLE facture (id INT AUTO_INCREMENT NOT NULL, numero_facture INT NOT NULL, date DATE NOT NULL, mois DATE NOT NULL, code_famille INT NOT NULL, matricule_eleve INT NOT NULL, prenoms LONGTEXT NOT NULL, nom LONGTEXT NOT NULL, classe LONGTEXT NOT NULL, methode LONGTEXT NOT NULL, montant INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;
CREATE TABLE paiement (id INT AUTO_INCREMENT NOT NULL, code_famille INT NOT NULL, matricule INT NOT NULL, numero_de_recu INT NOT NULL, date DATE NOT NULL, mois DATE NOT NULL, prenoms LONGTEXT NOT NULL, nom LONGTEXT NOT NULL, classe LONGTEXT NOT NULL, numero_facture INT NOT NULL, methode LONGTEXT NOT NULL, montant INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;
CREATE TABLE parents (id INT AUTO_INCREMENT NOT NULL, code_famille INT NOT NULL, prenom_parent LONGTEXT NOT NULL, nom_parent LONGTEXT NOT NULL, secteur_dactivite LONGTEXT NOT NULL, profession LONGTEXT NOT NULL, telephone_portable1 INT NOT NULL, telephone_portable2 INT DEFAULT NULL, telephone_bureau INT DEFAULT NULL, telephone_fixe_maison INT NOT NULL, email LONGTEXT NOT NULL, adresse LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;
CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, prenom LONGTEXT NOT NULL, nom LONGTEXT NOT NULL, email LONGTEXT NOT NULL, mot_de_passe LONGTEXT NOT NULL, role INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;
INSERT INTO migration_versions (version, executed_at) VALUES ('20200220172921', CURRENT_TIMESTAMP);

-- Version 20200228165955
ALTER TABLE cm2 ADD n INT NOT NULL, ADD annee_academique INT NOT NULL, ADD matricule INT NOT NULL;
ALTER TABLE eleve ADD code_famille INT NOT NULL;
INSERT INTO migration_versions (version, executed_at) VALUES ('20200228165955', CURRENT_TIMESTAMP);

-- Version 20200302110101
CREATE TABLE abonnement_services (id INT AUTO_INCREMENT NOT NULL, gouter LONGTEXT NOT NULL COMMENT '(DC2Type:array)', cantine TINYINT(1) NOT NULL, assurance TINYINT(1) NOT NULL, kimono TINYINT(1) NOT NULL, zone_de_tranport LONGTEXT NOT NULL COMMENT '(DC2Type:array)', taux_de_transport INT NOT NULL, survetement_eps LONGTEXT NOT NULL COMMENT '(DC2Type:array)', teeshirt_eps LONGTEXT NOT NULL COMMENT '(DC2Type:array)', blouse LONGTEXT NOT NULL COMMENT '(DC2Type:array)', bonnets LONGTEXT NOT NULL COMMENT '(DC2Type:array)', cours_du_soir LONGTEXT NOT NULL COMMENT '(DC2Type:array)', penalite_retard LONGTEXT NOT NULL COMMENT '(DC2Type:array)', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;
INSERT INTO migration_versions (version, executed_at) VALUES ('20200302110101', CURRENT_TIMESTAMP);

-- Version 20200302124732
ALTER TABLE abonnement_services ADD taekwando TINYINT(1) NOT NULL, CHANGE gouter gouter TINYINT(1) NOT NULL;
INSERT INTO migration_versions (version, executed_at) VALUES ('20200302124732', CURRENT_TIMESTAMP);

-- Version 20200303133137
CREATE TABLE salarie (id INT AUTO_INCREMENT NOT NULL, prenom VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, poste VARCHAR(255) NOT NULL, type_de_contract VARCHAR(255) NOT NULL, telephone_portable VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, adresse_de_residence VARCHAR(255) NOT NULL, matricule VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;
ALTER TABLE abonnement_services CHANGE zone_de_tranport zone_de_tranport LONGTEXT NOT NULL, CHANGE survetement_eps survetement_eps TINYINT(1) NOT NULL, CHANGE teeshirt_eps teeshirt_eps TINYINT(1) NOT NULL, CHANGE blouse blouse TINYINT(1) NOT NULL, CHANGE bonnets bonnets TINYINT(1) NOT NULL, CHANGE cours_du_soir cours_du_soir TINYINT(1) NOT NULL, CHANGE penalite_retard penalite_retard TINYINT(1) NOT NULL;
INSERT INTO migration_versions (version, executed_at) VALUES ('20200303133137', CURRENT_TIMESTAMP);

-- Version 20200304110813
CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT '(DC2Type:json)', prenom VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_1D1C63B3E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;
DROP TABLE user;
INSERT INTO migration_versions (version, executed_at) VALUES ('20200304110813', CURRENT_TIMESTAMP);

-- Version 20200305112622
ALTER TABLE utilisateur ADD hash VARCHAR(255) NOT NULL;
INSERT INTO migration_versions (version, executed_at) VALUES ('20200305112622', CURRENT_TIMESTAMP);

-- Version 20200306102225
CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL, username VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;
INSERT INTO migration_versions (version, executed_at) VALUES ('20200306102225', CURRENT_TIMESTAMP);

-- Version 20200310104020
DROP TABLE user;
INSERT INTO migration_versions (version, executed_at) VALUES ('20200310104020', CURRENT_TIMESTAMP);

-- Version 20200310120426
CREATE TABLE eleve_classe (eleve_id INT NOT NULL, classe_id INT NOT NULL, INDEX IDX_564E8557A6CC7B2 (eleve_id), INDEX IDX_564E85578F5EA509 (classe_id), PRIMARY KEY(eleve_id, classe_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;
ALTER TABLE eleve_classe ADD CONSTRAINT FK_564E8557A6CC7B2 FOREIGN KEY (eleve_id) REFERENCES eleve (id) ON DELETE CASCADE;
ALTER TABLE eleve_classe ADD CONSTRAINT FK_564E85578F5EA509 FOREIGN KEY (classe_id) REFERENCES classe (id) ON DELETE CASCADE;
ALTER TABLE annee_academique DROP classe, CHANGE annee_academique annee_academique VARCHAR(255) NOT NULL;
ALTER TABLE classe ADD annee_academique_id INT NOT NULL, ADD n INT NOT NULL, ADD matricule INT NOT NULL, DROP cm2, DROP hifz1, DROP hifz2, DROP hifz3, DROP hifz4, DROP hifz5, DROP moyenne_section, DROP petite_section, DROP toute_petite_section;
ALTER TABLE classe ADD CONSTRAINT FK_8F87BF96B00F076 FOREIGN KEY (annee_academique_id) REFERENCES annee_academique (id);
CREATE INDEX IDX_8F87BF96B00F076 ON classe (annee_academique_id);
INSERT INTO migration_versions (version, executed_at) VALUES ('20200310120426', CURRENT_TIMESTAMP);

-- Version 20200310135446
ALTER TABLE abonnement_services ADD eleve_id INT NOT NULL;
ALTER TABLE abonnement_services ADD CONSTRAINT FK_303B5ABEA6CC7B2 FOREIGN KEY (eleve_id) REFERENCES eleve (id);
CREATE UNIQUE INDEX UNIQ_303B5ABEA6CC7B2 ON abonnement_services (eleve_id);
ALTER TABLE eleve ADD parent_id INT NOT NULL;
ALTER TABLE eleve ADD CONSTRAINT FK_ECA105F7727ACA70 FOREIGN KEY (parent_id) REFERENCES parents (id);
CREATE INDEX IDX_ECA105F7727ACA70 ON eleve (parent_id);
INSERT INTO migration_versions (version, executed_at) VALUES ('20200310135446', CURRENT_TIMESTAMP);

-- Version 20200310140536
ALTER TABLE eleve ADD CONSTRAINT FK_ECA105F7727ACA70 FOREIGN KEY (parent_id) REFERENCES parents (id);
CREATE INDEX IDX_ECA105F7727ACA70 ON eleve (parent_id);
INSERT INTO migration_versions (version, executed_at) VALUES ('20200310140536', CURRENT_TIMESTAMP);

-- Version 20200310161420
ALTER TABLE classe ADD classe VARCHAR(255) NOT NULL;
ALTER TABLE eleve ADD CONSTRAINT FK_ECA105F7727ACA70 FOREIGN KEY (parent_id) REFERENCES parents (id);
CREATE INDEX IDX_ECA105F7727ACA70 ON eleve (parent_id);
INSERT INTO migration_versions (version, executed_at) VALUES ('20200310161420', CURRENT_TIMESTAMP);

-- Version 20200310161944
ALTER TABLE abonnement_services DROP FOREIGN KEY FK_303B5ABEA6CC7B2;
DROP INDEX UNIQ_303B5ABEA6CC7B2 ON abonnement_services;
ALTER TABLE abonnement_services CHANGE eleve_id eleves_id INT NOT NULL;
ALTER TABLE abonnement_services ADD CONSTRAINT FK_303B5ABEC2140342 FOREIGN KEY (eleves_id) REFERENCES eleve (id);
CREATE UNIQUE INDEX UNIQ_303B5ABEC2140342 ON abonnement_services (eleves_id);
ALTER TABLE classe ADD classe VARCHAR(255) NOT NULL;
ALTER TABLE eleve ADD CONSTRAINT FK_ECA105F7727ACA70 FOREIGN KEY (parent_id) REFERENCES parents (id);
CREATE INDEX IDX_ECA105F7727ACA70 ON eleve (parent_id);
INSERT INTO migration_versions (version, executed_at) VALUES ('20200310161944', CURRENT_TIMESTAMP);

-- Version 20200310162524
CREATE TABLE abonnement_services (id INT AUTO_INCREMENT NOT NULL, eleve_id INT NOT NULL, gouter TINYINT(1) NOT NULL, cantine TINYINT(1) NOT NULL, assurance TINYINT(1) NOT NULL, kimono TINYINT(1) NOT NULL, zone_de_tranport LONGTEXT NOT NULL, taux_de_transport INT NOT NULL, survetement_eps TINYINT(1) NOT NULL, teeshirt_eps TINYINT(1) NOT NULL, blouse TINYINT(1) NOT NULL, bonnets TINYINT(1) NOT NULL, cours_du_soir TINYINT(1) NOT NULL, penalite_retard TINYINT(1) NOT NULL, taekwando TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_303B5ABEA6CC7B2 (eleve_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;
ALTER TABLE abonnement_services ADD CONSTRAINT FK_303B5ABEA6CC7B2 FOREIGN KEY (eleve_id) REFERENCES eleve (id);
ALTER TABLE classe ADD classe VARCHAR(255) NOT NULL;
ALTER TABLE eleve ADD CONSTRAINT FK_ECA105F7727ACA70 FOREIGN KEY (parent_id) REFERENCES parents (id);
CREATE INDEX IDX_ECA105F7727ACA70 ON eleve (parent_id);
INSERT INTO migration_versions (version, executed_at) VALUES ('20200310162524', CURRENT_TIMESTAMP);

-- Version 20200310162600
CREATE TABLE abonnement_services (id INT AUTO_INCREMENT NOT NULL, eleve_id INT NOT NULL, gouter TINYINT(1) NOT NULL, cantine TINYINT(1) NOT NULL, assurance TINYINT(1) NOT NULL, kimono TINYINT(1) NOT NULL, zone_de_tranport LONGTEXT NOT NULL, taux_de_transport INT NOT NULL, survetement_eps TINYINT(1) NOT NULL, teeshirt_eps TINYINT(1) NOT NULL, blouse TINYINT(1) NOT NULL, bonnets TINYINT(1) NOT NULL, cours_du_soir TINYINT(1) NOT NULL, penalite_retard TINYINT(1) NOT NULL, taekwando TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_303B5ABEA6CC7B2 (eleve_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;
ALTER TABLE abonnement_services ADD CONSTRAINT FK_303B5ABEA6CC7B2 FOREIGN KEY (eleve_id) REFERENCES eleve (id);
ALTER TABLE classe ADD classe VARCHAR(255) NOT NULL;
ALTER TABLE eleve ADD CONSTRAINT FK_ECA105F7727ACA70 FOREIGN KEY (parent_id) REFERENCES parents (id);
CREATE INDEX IDX_ECA105F7727ACA70 ON eleve (parent_id);
INSERT INTO migration_versions (version, executed_at) VALUES ('20200310162600', CURRENT_TIMESTAMP);

-- Version 20200310163002
CREATE TABLE abonnement_services (id INT AUTO_INCREMENT NOT NULL, eleve_id INT NOT NULL, gouter TINYINT(1) NOT NULL, cantine TINYINT(1) NOT NULL, assurance TINYINT(1) NOT NULL, kimono TINYINT(1) NOT NULL, zone_de_tranport LONGTEXT NOT NULL, taux_de_transport INT NOT NULL, survetement_eps TINYINT(1) NOT NULL, teeshirt_eps TINYINT(1) NOT NULL, blouse TINYINT(1) NOT NULL, bonnets TINYINT(1) NOT NULL, cours_du_soir TINYINT(1) NOT NULL, penalite_retard TINYINT(1) NOT NULL, taekwando TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_303B5ABEA6CC7B2 (eleve_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;
ALTER TABLE abonnement_services ADD CONSTRAINT FK_303B5ABEA6CC7B2 FOREIGN KEY (eleve_id) REFERENCES eleve (id);
ALTER TABLE classe ADD classe VARCHAR(255) NOT NULL;
ALTER TABLE eleve ADD CONSTRAINT FK_ECA105F7727ACA70 FOREIGN KEY (parent_id) REFERENCES parents (id);
CREATE INDEX IDX_ECA105F7727ACA70 ON eleve (parent_id);
INSERT INTO migration_versions (version, executed_at) VALUES ('20200310163002', CURRENT_TIMESTAMP);

-- Version 20200310163235
CREATE TABLE abonnement_services (id INT AUTO_INCREMENT NOT NULL, eleve_id INT NOT NULL, gouter TINYINT(1) NOT NULL, cantine TINYINT(1) NOT NULL, assurance TINYINT(1) NOT NULL, kimono TINYINT(1) NOT NULL, zone_de_tranport LONGTEXT NOT NULL, taux_de_transport INT NOT NULL, survetement_eps TINYINT(1) NOT NULL, teeshirt_eps TINYINT(1) NOT NULL, blouse TINYINT(1) NOT NULL, bonnets TINYINT(1) NOT NULL, cours_du_soir TINYINT(1) NOT NULL, penalite_retard TINYINT(1) NOT NULL, taekwando TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_303B5ABEA6CC7B2 (eleve_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;
ALTER TABLE abonnement_services ADD CONSTRAINT FK_303B5ABEA6CC7B2 FOREIGN KEY (eleve_id) REFERENCES eleve (id);
ALTER TABLE classe ADD classe VARCHAR(255) NOT NULL;
ALTER TABLE eleve ADD CONSTRAINT FK_ECA105F7727ACA70 FOREIGN KEY (parent_id) REFERENCES parents (id);
CREATE INDEX IDX_ECA105F7727ACA70 ON eleve (parent_id);
INSERT INTO migration_versions (version, executed_at) VALUES ('20200310163235', CURRENT_TIMESTAMP);

-- Version 20200310163513
CREATE TABLE abonnement_services (id INT AUTO_INCREMENT NOT NULL, eleve_id INT NOT NULL, gouter TINYINT(1) NOT NULL, cantine TINYINT(1) NOT NULL, assurance TINYINT(1) NOT NULL, kimono TINYINT(1) NOT NULL, zone_de_tranport LONGTEXT NOT NULL, taux_de_transport INT NOT NULL, survetement_eps TINYINT(1) NOT NULL, teeshirt_eps TINYINT(1) NOT NULL, blouse TINYINT(1) NOT NULL, bonnets TINYINT(1) NOT NULL, cours_du_soir TINYINT(1) NOT NULL, penalite_retard TINYINT(1) NOT NULL, taekwando TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_303B5ABEA6CC7B2 (eleve_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;
ALTER TABLE abonnement_services ADD CONSTRAINT FK_303B5ABEA6CC7B2 FOREIGN KEY (eleve_id) REFERENCES eleve (id);
ALTER TABLE classe ADD classe VARCHAR(255) NOT NULL;
ALTER TABLE eleve ADD CONSTRAINT FK_ECA105F7727ACA70 FOREIGN KEY (parent_id) REFERENCES parents (id);
CREATE INDEX IDX_ECA105F7727ACA70 ON eleve (parent_id);
INSERT INTO migration_versions (version, executed_at) VALUES ('20200310163513', CURRENT_TIMESTAMP);

-- Version 20200310165410
INSERT INTO migration_versions (version, executed_at) VALUES ('20200310165410', CURRENT_TIMESTAMP);

-- Version 20200310165631
CREATE TABLE abonnement_services (id INT AUTO_INCREMENT NOT NULL, eleve_id INT NOT NULL, gouter TINYINT(1) NOT NULL, cantine TINYINT(1) NOT NULL, assurance TINYINT(1) NOT NULL, kimono TINYINT(1) NOT NULL, zone_de_tranport LONGTEXT NOT NULL, taux_de_transport INT NOT NULL, survetement_eps TINYINT(1) NOT NULL, teeshirt_eps TINYINT(1) NOT NULL, blouse TINYINT(1) NOT NULL, bonnets TINYINT(1) NOT NULL, cours_du_soir TINYINT(1) NOT NULL, penalite_retard TINYINT(1) NOT NULL, taekwando TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_303B5ABEA6CC7B2 (eleve_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;
ALTER TABLE abonnement_services ADD CONSTRAINT FK_303B5ABEA6CC7B2 FOREIGN KEY (eleve_id) REFERENCES eleve (id);
ALTER TABLE classe ADD classe VARCHAR(255) NOT NULL;
ALTER TABLE eleve ADD CONSTRAINT FK_ECA105F7727ACA70 FOREIGN KEY (parent_id) REFERENCES parents (id);
CREATE INDEX IDX_ECA105F7727ACA70 ON eleve (parent_id);
INSERT INTO migration_versions (version, executed_at) VALUES ('20200310165631', CURRENT_TIMESTAMP);

-- Version 20200310165838
ALTER TABLE classe ADD classe VARCHAR(255) NOT NULL;
ALTER TABLE eleve ADD CONSTRAINT FK_ECA105F7727ACA70 FOREIGN KEY (parent_id) REFERENCES parents (id);
CREATE INDEX IDX_ECA105F7727ACA70 ON eleve (parent_id);
INSERT INTO migration_versions (version, executed_at) VALUES ('20200310165838', CURRENT_TIMESTAMP);

-- Version 20200310170304
CREATE TABLE abonnement_services (id INT AUTO_INCREMENT NOT NULL, eleve_id INT NOT NULL, gouter TINYINT(1) NOT NULL, cantine TINYINT(1) NOT NULL, assurance TINYINT(1) NOT NULL, kimono TINYINT(1) NOT NULL, zone_de_tranport LONGTEXT NOT NULL, taux_de_transport INT NOT NULL, survetement_eps TINYINT(1) NOT NULL, teeshirt_eps TINYINT(1) NOT NULL, blouse TINYINT(1) NOT NULL, bonnets TINYINT(1) NOT NULL, cours_du_soir TINYINT(1) NOT NULL, penalite_retard TINYINT(1) NOT NULL, taekwando TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_303B5ABEA6CC7B2 (eleve_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;
ALTER TABLE abonnement_services ADD CONSTRAINT FK_303B5ABEA6CC7B2 FOREIGN KEY (eleve_id) REFERENCES eleve (id);
ALTER TABLE classe ADD classe VARCHAR(255) NOT NULL;
ALTER TABLE eleve ADD CONSTRAINT FK_ECA105F7727ACA70 FOREIGN KEY (parent_id) REFERENCES parents (id);
CREATE INDEX IDX_ECA105F7727ACA70 ON eleve (parent_id);
INSERT INTO migration_versions (version, executed_at) VALUES ('20200310170304', CURRENT_TIMESTAMP);

-- Version 20200310170544
DROP TABLE abonnement_services;
ALTER TABLE classe ADD classe VARCHAR(255) NOT NULL;
ALTER TABLE eleve ADD CONSTRAINT FK_ECA105F7727ACA70 FOREIGN KEY (parent_id) REFERENCES parents (id);
CREATE INDEX IDX_ECA105F7727ACA70 ON eleve (parent_id);
INSERT INTO migration_versions (version, executed_at) VALUES ('20200310170544', CURRENT_TIMESTAMP);

-- Version 20200310171053
DROP TABLE abonnement_services;
ALTER TABLE classe ADD classe VARCHAR(255) NOT NULL;
ALTER TABLE eleve ADD CONSTRAINT FK_ECA105F7727ACA70 FOREIGN KEY (parent_id) REFERENCES parents (id);
CREATE INDEX IDX_ECA105F7727ACA70 ON eleve (parent_id);
INSERT INTO migration_versions (version, executed_at) VALUES ('20200310171053', CURRENT_TIMESTAMP);

-- Version 20200310173504
ALTER TABLE classe DROP FOREIGN KEY FK_8F87BF96B00F076;
DROP INDEX IDX_8F87BF96B00F076 ON classe;
ALTER TABLE classe ADD annee_academique VARCHAR(255) NOT NULL, DROP annee_academique_id, DROP n;
INSERT INTO migration_versions (version, executed_at) VALUES ('20200310173504', CURRENT_TIMESTAMP);

-- Version 20200310175422
ALTER TABLE annee_academique DROP n, DROP matricule;
INSERT INTO migration_versions (version, executed_at) VALUES ('20200310175422', CURRENT_TIMESTAMP);

-- Version 20200310175605
ALTER TABLE annee_academique DROP n, DROP matricule;
INSERT INTO migration_versions (version, executed_at) VALUES ('20200310175605', CURRENT_TIMESTAMP);

-- Version 20200311094543
ALTER TABLE classe ADD classe_id INT NOT NULL, DROP n, DROP matricule;
INSERT INTO migration_versions (version, executed_at) VALUES ('20200311094543', CURRENT_TIMESTAMP);

-- Version 20200311111149
ALTER TABLE classe ADD annee_academique_id INT NOT NULL;
ALTER TABLE classe ADD CONSTRAINT FK_8F87BF96B00F076 FOREIGN KEY (annee_academique_id) REFERENCES annee_academique (id);
CREATE INDEX IDX_8F87BF96B00F076 ON classe (annee_academique_id);
INSERT INTO migration_versions (version, executed_at) VALUES ('20200311111149', CURRENT_TIMESTAMP);

-- Version 20200311115605
DROP TABLE eleve_classe;
INSERT INTO migration_versions (version, executed_at) VALUES ('20200311115605', CURRENT_TIMESTAMP);

-- Version 20200311122705
CREATE TABLE `option` (id INT AUTO_INCREMENT NOT NULL, options VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, montant INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;
CREATE TABLE option_classe (option_id INT NOT NULL, classe_id INT NOT NULL, INDEX IDX_CCD7BD41A7C41D6F (option_id), INDEX IDX_CCD7BD418F5EA509 (classe_id), PRIMARY KEY(option_id, classe_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;
ALTER TABLE option_classe ADD CONSTRAINT FK_CCD7BD41A7C41D6F FOREIGN KEY (option_id) REFERENCES `option` (id) ON DELETE CASCADE;
ALTER TABLE option_classe ADD CONSTRAINT FK_CCD7BD418F5EA509 FOREIGN KEY (classe_id) REFERENCES classe (id) ON DELETE CASCADE;
DROP TABLE eleve_classe;
INSERT INTO migration_versions (version, executed_at) VALUES ('20200311122705', CURRENT_TIMESTAMP);

-- Version 20200311133558
DROP TABLE eleve_classe;
INSERT INTO migration_versions (version, executed_at) VALUES ('20200311133558', CURRENT_TIMESTAMP);

-- Version 20200311135304
DROP TABLE option_classe;
INSERT INTO migration_versions (version, executed_at) VALUES ('20200311135304', CURRENT_TIMESTAMP);

-- Version 20200311140405
DROP TABLE option_classe;
ALTER TABLE `option` ADD classe_id INT NOT NULL;
ALTER TABLE `option` ADD CONSTRAINT FK_5A8600B08F5EA509 FOREIGN KEY (classe_id) REFERENCES classe (id);
CREATE INDEX IDX_5A8600B08F5EA509 ON `option` (classe_id);
INSERT INTO migration_versions (version, executed_at) VALUES ('20200311140405', CURRENT_TIMESTAMP);
