CREATE DATABASE IF NOT EXISTS institute_cms;
USE institute_cms;

CREATE TABLE users(
    id              int(255) auto_increment not null,
    name            varchar(100) not null,
    surname         varchar(100) not null,
    email           varchar(255) not null,
    password        varchar(255) not null,
    gender          varchar(255) not null,
    rol             varchar(255) not null,
    resgister_date  date not null,
    CONSTRAINT pk_users PRIMARY KEY(id),
    CONSTRAINT uq_email UNIQUE (email)
)ENGINE=InnoDb;

INSERT INTO users VALUES(NULL, 'admin', 'istrator', 'admin@admin.com', 'admin', 'male', 'admin', CURDATE());

CREATE TABLE courses(
    id              int(255) auto_increment not null,
    name            varchar(100) not null,
    description     varchar(255),
    creation_date   date not null,
    CONSTRAINT pk_courses PRIMARY KEY(id)
)ENGINE=InnoDb;

INSERT INTO courses VALUES(NULL, 'Operador de Sonido', 'Técnico operador de sonido y audio', CURDATE());

CREATE TABLE subjects(
    id              int(255) auto_increment not null,
    course_id       int(255) not null,
    name            varchar(100) not null,
    description     varchar(255),
    creation_date   date not null,
    CONSTRAINT pk_subjects PRIMARY KEY(id),
    CONSTRAINT fk_subject_course FOREIGN KEY(course_id) REFERENCES courses(id)
)ENGINE=InnoDb;

INSERT INTO subjects VALUES(NULL, 1, 'Mezcla 1', 'Primera edición de Mezcla, materia enfocada en el balanceo de volúmenes y paneos', CURDATE());

CREATE TABLE student_in_subject(
    subject_id   int(255) not null,
    student_id  int(255) not null,
    CONSTRAINT fk_student_subject_student FOREIGN KEY(student_id) REFERENCES users(id),
    CONSTRAINT fk_student_subject_subject FOREIGN KEY(subject_id) REFERENCES subjects(id)
)ENGINE=InnoDb;

CREATE TABLE professor_in_subject(
    subject_id   int(255) not null,
    professor_id  int(255) not null,
    CONSTRAINT fk_professor_subject_professor FOREIGN KEY(professor_id) REFERENCES users(id),
    CONSTRAINT fk_professor_subject_subject FOREIGN KEY(subject_id) REFERENCES subjects(id)
)ENGINE=InnoDb;
