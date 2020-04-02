pipeline {
    agent any
    stages {
        stage('build') {
            steps {
                sh 'composer install'
                sh './vendor/bin/phpcpd src/'
            }
        }
    }
}
