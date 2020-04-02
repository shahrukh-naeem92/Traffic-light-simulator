pipeline {
    agent any
    stages {
        stage('build') {
            steps {
                sh 'composer require sebastian/phpcpd'
                sh './vendor/bin/phpcpd src/ || exit 1'
            }
        }
    }
}
