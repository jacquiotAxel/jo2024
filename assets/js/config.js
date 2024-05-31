module.exports = {
  development: {
    username: 'votre_nom_utilisateur',
    password: 'votre_mot_de_passe',
    database: 'nom_de_votre_base_de_données',
    host: 'localhost',
    dialect: 'mysql'
  },
  production: {
    username: process.env.DB_USERNAME,
    password: process.env.DB_PASSWORD,
    database: process.env.DB_NAME,
    host: process.env.DB_HOST,
    dialect: 'mysql'
  }
};
