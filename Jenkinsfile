pipeline {
    agent { label 'slave1' }
    stages {
        stage('build') {
            steps {
                sh '/var/www/jenkins/helloworld.sh'
            }
        }
    }
}
