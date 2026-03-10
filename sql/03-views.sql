USE cinema;

CREATE VIEW `filmsInfos` AS

SELECT `films`.idFilm, titre, annee, resume, 
CONCAT(
    `directeur`.`nom`,',',`directeur`.`prenom`,',',
    `directeur`.`anneeNaissance`
) AS directeur,
GROUP_CONCAT(
    `acteur`.`nom`,',',`acteur`.`prenom`,',',
    `acteur`.`anneeNaissance`,',',`roles`.`nomRole` SEPARATOR ';'
) as acteurs,
`pays`.nom as `pays`,
`genres`.`Genre` as `genre`
FROM `films`

LEFT JOIN `pays`
ON `films`.idPays = `pays`.idPays
LEFT JOIN `genres`
ON `films`.idGenre = `genres`.`idGenre`
LEFT JOIN `personnes` as `directeur`
ON `films`.`idPersonne` = `directeur`.`idPersonne`
LEFT JOIN `roles`
ON `films`.`idFilm` = `roles`.`idFilm`
LEFT JOIN `personnes` as `acteur`
ON `roles`.`idPersonne` = `acteur`.`idPersonne`
GROUP BY `films`.`idFilm`;
