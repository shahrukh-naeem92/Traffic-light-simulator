pipeline {
    agent any
    stages {
        stage('build') {
            steps {
                sh './vendor/bin/phpcpd src/'
            }
        }
    }
}
