pipeline {
    agent any
    stages {
        stage('build') {
            steps {
                sh './vendor/bin/phpcpd --log-pmd build/logs/pmd-cpd.xml --exclude vendor . || exit 1'
            }
        }
    }
}
