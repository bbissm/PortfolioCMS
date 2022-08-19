#GO-LIVE GUIDELINES
+ "encore prod" on dev
+ ssh martin-skills
+ pull main on production
+ deploy public/build folder to production
+ "bin/console cache:clear" on production
+ check database migrations bin/console doctrine:schema:update --force
