<div ng-app class="container">
        <div class="row">
        <div class="jumbotron">
        <h1> Best Bet Wins Prototype {{1+1}}</h1>
        <div ng-controller="CreateBetController">
        <div ng-repeat="betPreview in bets" class="panel panel-default">
            <div class="panel-heading"><h2> Bet Title: {{betPreview.title}}</h2></div>
            <div class="panel-body">
            <ul class="list-group">
                <li class="list-group-item" ng-repeat="question in betPreview.questions">
                    {{question.text}} Answer: {{question.answered}}<br/>
                    <div ng-repeat="answer in question.answers" class="input-group">
<span class="input-group-addon"><input type="radio" ng-model="question.answered" value="{{$index}}"></span> {{answer.text}}
                </div>
                </li>
            </ul>
            </div>
        </div>
        <form name="createBetForm">
            <h4>Submit a bet</h4>
                <textarea ng-model="form.betTitle" placeholder="What is the main topic of your bid..."></textarea><br/>
                <div ng-repeat="question in form.questions">
                    <textarea  ng-model="question.text" placeholder="Your question"></textarea>
                    <div ng-repeat="answer in question.answers">
                        <textarea  ng-model="answer.text" placeholder="Possible answer"></textarea>
                    </div>
                    <button type="button" class="btn btn-default btn-lg" ng-click="addAnswer(question)">Add possible answer</button>
                <br/>
                </div>
                <button type="button" class="btn btn-default btn-lg" ng-click="addQuestion()"><span class="glyphicon-class">Add question</span></button>
                <button type="button" class="btn btn-default btn-lg" ng-click="addBet()">Add bet</button>
            </form>
            </div>
        </div>
     </div>
 </div>
