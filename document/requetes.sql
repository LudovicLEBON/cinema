-- afficher la liste des réalisateurs d'un film
select pro_id,pro_intervenant,concat(int_nom," ",int_prenom) nom,pro_film,fil_titre 
from produire,film,intervenant 
where pro_film=fil_id and pro_intervenant=int_id order by pro_film;
-- afficher la liste des acteurs d'un film
select par_id,par_intervenant,concat(int_nom," ",int_prenom) nom,par_film,fil_titre 
from participer,film,intervenant 
where par_film=fil_id and par_intervenant=int_id order by par_film;
-- afficher la liste des films d'un réalisateur
select pro_id,pro_intervenant,concat(int_nom," ",int_prenom) realisateur,pro_film,fil_titre
from produire,film,intervenant
where pro_film=fil_id and pro_intervenant=int_id order by pro_intervenant;
-- afficher la liste des films d'un acteur
select par_id,par_intervenant,concat(int_nom," ",int_prenom) acteur,par_film,fil_titre
from participer,film,intervenant
where par_film=fil_id and par_intervenant=int_id order by par_intervenant;

-- afficher le nombre de films réalisés par réalisateur.
select pro_id,pro_intervenant,concat(int_nom," ",int_prenom) realisateur,count(pro_film) nbréalisations
from produire,intervenant
where pro_intervenant=int_id group by pro_intervenant;

-- afficher le nombre de films par acteur.
select par_id,par_intervenant,concat(int_nom," ",int_prenom) acteur,count(par_film) nbréalisations
from participer,intervenant
where par_intervenant=int_id group by par_intervenant;

-- afficher dans combien de cinéma chaque film a été projeté.
select dif_film,fil_titre,count(dif_cinema) nbcinema_diffuseur
from diffuser,film
where fil_id=dif_film
group by dif_film order by nbcinema_diffuseur desc;

-- afficher combien de films seront projetés le 24/12/2022.
select dif_date_apparition,dif_date_disparition,count(distinct dif_film) nbfilmdiffuser
from diffuser
where dif_date_apparition<'2022-12-24' and dif_date_disparition>'2022-12-24'
--ou bien
where "2022-12-24" between dif_date_apparition and dif_date_disparition;
-- afficher combien de films seront projetés entre le 24/12/2022 et le 31/12/2022.
select count(distinct dif_film) nbfilmdiffuser
from diffuser
where not(dif_date_disparition<'2022-12-24' or dif_date_apparition>'2022-12-31');

-- afficher le nombre de jours où un film est joué dans un cinéma
select dif_cinema,cin_libelle,dif_film,(dif_date_disparition-dif_date_apparition) nbjour
from diffuser,cinema
where dif_cinema=cin_id;
--avec datedif
select dif_cinema,cin_libelle,dif_film,datediff(dif_date_disparition,dif_date_apparition) nbjour
from diffuser,cinema
where dif_cinema=cin_id;
--avec moyenne
select dif_cinema,cin_libelle,dif_film,avg(datediff(dif_date_disparition,dif_date_apparition) nbjour) moyenne
from diffuser,cinema
where dif_cinema=cin_id;
group by dif_film
order by moyenne desc;
-- afficher par mois, pour l'année 2022, le nombre de salles où un film est joué.
select dif_film,fil_titre,month(dif_date_apparition) mois,count(dif_cinema) nbsalle
from diffuser,film
where dif_film=fil_id and year(dif_date_disparition)=2022
group by dif_film,mois;

-- quel cinéma a projeté le plus de film
select dif_cinema, count(dif_film) nb
from diffuser
group by dif_cinema
order by nb desc;
