'use strict';

/* App Module */

var app = angular.module('bbw', []);

app.controller('CreateBetController', function($scope) {
    $scope.betPreview=[{
            title:'FIFA World championship',
            questions:
            [{text:'How many corners will be in Spain vs Brasil?',
              answers:[
                  {text:'1 corner', selected:false},
                  {text:'2 corners', selected:false},
                  {text:'3 corners', selected:false}
              ],
              answered:0
             },
             {text:'Who wins the championship?',
              answers:[
                  {text:'Romania', selected:false},
                  {text:'Brasil', selected:false},
                  {text:'Bla', selected:false}
              ],
              answered:0
             },
            ]
            }];

    $scope.bets=[];
    $scope.bets.push($scope.betPreview[0]);
    $scope.form={betTitle:'',
        questions:[]
    }

    $scope.questions=[];
    $scope.addBet= function(){
        var bet={title:$scope.form.betTitle,
                 questions:$scope.form.questions}
        $scope.bets.push(bet);
        $scope.form.betTitle='';
        $scope.form.questions=[];
    };

    $scope.addQuestion=function(){
        $scope.form.questions.push({text:'',answers:[], answered:0});
    }

    $scope.addAnswer=function(question)
    {
        question.answers.push({text:'',selected:false});
    }
});

