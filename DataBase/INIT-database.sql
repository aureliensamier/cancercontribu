/*Changer de InnoDB en MyISAM
Enlever tout ce qui a marqué sur la ligne avant le mot "PRIMARY KEY" (sans virgule)
Enlever intégralement la ligne de code (avec virgule) pour FOREIGN KEY
Supprimer les tables des liaisons
Vérifier que les tables n'ont pas d'id d'autres tables, si c'est le cas
- rajouter sa clé primaire s'il y en pas de toute la table
- changer les deux anciennes lignes primaire id_ligneDeTable en table_ligneDeTable
*/


#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: CIVILITE
#------------------------------------------------------------

CREATE TABLE CIVILITE
(
    id_civilite      Int Auto_increment NOT NULL,
    civilite_libelle Int                NOT NULL,
    PRIMARY KEY (id_civilite)
) ENGINE = MyISAM;


#------------------------------------------------------------
# Table: ACTEUR
#------------------------------------------------------------

CREATE TABLE ACTEUR
(
    id_acteur      Int Auto_increment NOT NULL,
    acteur_libelle Varchar(100)       NOT NULL,
    acteur_idOM    Text               NOT NULL,
    PRIMARY KEY (id_acteur)
) ENGINE = MyISAM;


#------------------------------------------------------------
# Table: ARTICLE
#------------------------------------------------------------

CREATE TABLE ARTICLE
(
    id_article      Int Auto_increment NOT NULL,
    article_titre   Text               NOT NULL,
    article_date    Datetime           NOT NULL,
    article_content Text               NOT NULL,
    article_auteur  Varchar(100)       NOT NULL,
    article_MAJ     Date               NOT NULL,
    article_source  Text               NOT NULL,
    article_avatar  Text               NOT NULL,
    PRIMARY KEY (id_article)
) ENGINE = MyISAM;


#------------------------------------------------------------
# Table: SHARE
#------------------------------------------------------------

CREATE TABLE SHARE
(
    id_share     Int Auto_increment NOT NULL,
    share_nom    Varchar(100)       NOT NULL,
    share_link   Text               NOT NULL,
    share_avatar Text               NOT NULL,
    PRIMARY KEY (id_share)
) ENGINE = MyISAM;


#------------------------------------------------------------
# Table: TAG
#------------------------------------------------------------

CREATE TABLE TAG
(
    id_tag      Int Auto_increment NOT NULL,
    tag_nom     Varchar(300)       NOT NULL,
    tag_couleur Varchar(50)        NOT NULL,
    PRIMARY KEY (id_tag)
) ENGINE = MyISAM;


#------------------------------------------------------------
# Table: MEDIA
#------------------------------------------------------------

CREATE TABLE MEDIA
(
    id_media      Int Auto_increment NOT NULL,
    media_legende Varchar(300)       NOT NULL,
    media_alt     Varchar(300)       NOT NULL,
    media_type    Varchar(100)       NOT NULL,
    media_date    Date               NOT NULL,
    PRIMARY KEY (id_media)
) ENGINE = MyISAM;


#------------------------------------------------------------
# Table: USER
#------------------------------------------------------------

CREATE TABLE USER
(
    id_user         Int Auto_increment NOT NULL,
    user_nom        Varchar(100)       NOT NULL,
    user_prenom     Varchar(100)       NOT NULL,
    user_pseudo     Varchar(100)       NOT NULL,
    user_mail       Varchar(150)       NOT NULL,
    user_password   Text               NOT NULL,
    user_naissance  Date               NOT NULL,
    user_codepostal Varchar(20)        NOT NULL,
    user_civilite   Int                NOT NULL,
    user_acteur     Int                NOT NULL,
    user_media      Int                NOT NULL,
    PRIMARY KEY (id_user)
) ENGINE = MyISAM;


#------------------------------------------------------------
# Table: COMMENTAIRE
#------------------------------------------------------------

CREATE TABLE COMMENTAIRE
(
    id_commentaire      Int Auto_increment NOT NULL,
    commentaire_titre   Varchar(200)       NOT NULL,
    commentaire_pseudo  Varchar(100)       NOT NULL,
    commentaire_date    Datetime           NOT NULL,
    commentaire_content Text               NOT NULL,
    commentaire_user    Int                NOT NULL,
    PRIMARY KEY (id_commentaire)
) ENGINE = MyISAM;


#------------------------------------------------------------
# Table: FORUM-SUJET
#------------------------------------------------------------

CREATE TABLE FORUM_SUJET
(
    id_forum    Int Auto_increment NOT NULL,
    forum_date  Datetime           NOT NULL,
    forum_media Int,
    PRIMARY KEY (id_forum)
) ENGINE = MyISAM;


#------------------------------------------------------------
# Table: POST
#------------------------------------------------------------

CREATE TABLE POST
(
    id_post      Int Auto_increment NOT NULL,
    post_titre   Varchar(300)       NOT NULL,
    post_content Text               NOT NULL,
    post_like    Int                NOT NULL,
    post_source  Text               NOT NULL,
    post_sponsor Varchar(300)       NOT NULL,
    post_time    Datetime           NOT NULL,
    post_forum   Int                NOT NULL,
    post_user    Int                NOT NULL,
    PRIMARY KEY (id_post)
) ENGINE = MyISAM;
