pipeline {
    agent any
    stages {
        stage('build') {
            steps {
                sh 'composer require sebastian/phpcpd'
                sh './vendor/bin/phpcpd --min-lines 1 --min-tokens 1  public/index.php || exit 1'
            }
        }
    }
}
