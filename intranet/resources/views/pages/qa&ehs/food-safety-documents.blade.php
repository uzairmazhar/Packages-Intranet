@extends('layouts.web-layout')
@section('header')
    <style>
        .background-3{
            background-color: #ef3c3f;
        }
    </style>
@endsection
@section('body')
    
    <section class="padding-tb-100px background-3">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="margin-bottom-60px text-white wow fadeInUp">
                        <h3 class="font-weight-700 text-title-large margin-bottom-25px">Food And Safety Documents</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="item margin-bottom-50px text-white wow fadeInUp">
			
                        <table>
                            <thead>
                            <tr>
                                <td><strong>Sr. #</strong></td>
                                <td><strong>Description</strong></td>
                                <td><strong>Action</strong></td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>4.11.9,6.4.1 FOOD SAFETY HAZARDS REPORTING SLIP</td>
                                <td><a href="{{asset('assets/food-safety-documents/Forms/4.11.9,6.4.1 FOOD SAFETY HAZARDS REPORTING SLIP.jpg')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>2</td>
                                <td>FSSC-IP-F-01 GMP AUDIT MATRIX</td>
                                <td><a href="{{asset('assets/food-safety-documents/Forms/FSSC-IP-F-01 GMP AUDIT MATRIX.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>3</td>
                                <td>FSSC-IP-F-02 PRP CATALOGUE</td>
                                <td><a href="{{asset('assets/food-safety-documents/Forms/FSSC-IP-F-02 PRP CATALOGUE.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>4</td>
                                <td>FSSC-IP-F-03 HACCP SCOPE</td>
                                <td><a href="{{asset('assets/food-safety-documents/Forms/FSSC-IP-F-03 HACCP SCOPE.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>5</td>
                                <td>FSSC-IP-F-04 HACCP TEAM</td>
                                <td><a href="{{asset('assets/food-safety-documents/Forms/FSSC-IP-F-04 HACCP TEAM.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>6</td>
                                <td>FSSC-IP-F-05 PRODUCT Description</td>
                                <td><a href="{{asset('assets/food-safety-documents/Forms/FSSC-IP-F-05 PRODUCT Description.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>7</td>
                                <td>FSSC-IP-F-06 IDENTIFY INTENDED USE</td>
                                <td><a href="{{asset('assets/food-safety-documents/Forms/FSSC-IP-F-06 IDENTIFY INTENDED USE.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>9</td>
                                <td>FSSC-IP-F-07 FLOW DIAGRAM</td>
                                <td><a href="{{asset('assets/food-safety-documents/Forms/FSSC-IP-F-07 FLOW DIAGRAM.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>10</td>
                                <td>FSSC-IP-F-08 ON SITE CONFIRMATION OF FLOW DIAGRAM</td>
                                <td><a href="{{asset('assets/food-safety-documents/Forms/FSSC-IP-F-08 ON SITE CONFIRMATION OF FLOW DIAGRAM.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>11</td>
                                <td>FSSC-IP-F-09 HAZARD IDENTIFICATION AND ANALYSIS</td>
                                <td><a href="{{asset('assets/food-safety-documents/Forms/FSSC-IP-F-09 HAZARD IDENTIFICATION AND ANALYSIS.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>12</td>
                                <td>FSSC-IP-F-10 DETERMINE CRITICAL CONTROL POINTS</td>
                                <td><a href="{{asset('assets/food-safety-documents/Forms/FSSC-IP-F-10 DETERMINE CRITICAL CONTROL POINTS.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>13</td>
                                <td>FSSC-IP-F-11 CRITICAL LIMITS</td>
                                <td><a href="{{asset('assets/food-safety-documents/Forms/FSSC-IP-F-11 CRITICAL LIMITS.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>14</td>
                                <td>FSSC-IP-F-12 PAS 223 AUDIT CHECKLIST FOR QA AND RnD</td>
                                <td><a href="{{asset('assets/food-safety-documents/Forms/FSSC-IP-F-12 PAS 223 AUDIT CHECKLIST FOR QA AND RnD.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>15</td>
                                <td>FSSC-IP-F-13 PAS 223 AUDIT CHECKLIST FOR SUPPLY CHAIN</td>
                                <td><a href="{{asset('assets/food-safety-documents/Forms/FSSC-IP-F-13 PAS 223 AUDIT CHECKLIST FOR SUPPLY CHAIN.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>16</td>
                                <td>FSSC-IP-F-14 PERSONAL HYGINE MONITORING CHECKLIST</td>
                                <td><a href="{{asset('assets/food-safety-documents/Forms/FSSC-IP-F-14 PERSONAL HYGINE MONITORING CHECKLIST.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>17</td>
                                <td>FSSC-IP-F-15 RECORD OF SNAPPER BOX</td>
                                <td><a href="{{asset('assets/food-safety-documents/Forms/FSSC-IP-F-15 RECORD OF SNAPPER BOX.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>18</td>
                                <td>FSSC-IP-F-16 FORK LIFTER CHECK LIST</td>
                                <td><a href="{{asset('assets/food-safety-documents/Forms/FSSC-IP-F-16 FORK LIFTER CHECK LIST.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>19</td>
                                <td>FSSC-IP-F-17 GLASS USAGE FORM</td>
                                <td><a href="{{asset('assets/food-safety-documents/Forms/FSSC-IP-F-17 GLASS USAGE FORM.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>20</td>
                                <td>FSSC-IP-F-18 ANNUAL CLEANING CHECKLIST</td>
                                <td><a href="{{asset('assets/food-safety-documents/Forms/FSSC-IP-F-18 ANNUAL CLEANING CHECKLIST.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>21</td>
                                <td>FSSC-IP-F-19 GMP AUDIT CHECKLIST</td>
                                <td><a href="{{asset('assets/food-safety-documents/Forms/FSSC-IP-F-19 GMP AUDIT CHECKLIST.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>22</td>
                                <td>FSSC-IP-F-20 PAS 223 AUDIT CHECKLIST FOR PRODUCTION</td>
                                <td><a href="{{asset('assets/food-safety-documents/Forms/FSSC-IP-F-20 PAS 223 AUDIT CHECKLIST FOR PRODUCTION.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>23</td>
                                <td>FSSC-IP-F-21 ISO 22000 AUDIT CHECKLIST</td>
                                <td><a href="{{asset('assets/food-safety-documents/Forms/FSSC-IP-F-21 ISO 22000 AUDIT CHECKLIST.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>24</td>
                                <td>FSSC-IP-F-22 PRODUCT RECALL AND WITHDRAWL ACTIVITY</td>
                                <td><a href="{{asset('assets/food-safety-documents/Forms/FSSC-IP-F-22 PRODUCT RECALL AND WITHDRAWL ACTIVITY.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>25</td>
                                <td>FSSC-IP-F-23 PRP VERIFICATION SCHEDULE</td>
                                <td><a href="{{asset('assets/food-safety-documents/Forms/FSSC-IP-F-23 PRP VERIFICATION SCHEDULE.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>26</td>
                                <td>FSSC-IP-F-24 OPRP VERIFICATION SCHEDULE</td>
                                <td><a href="{{asset('assets/food-safety-documents/Forms/FSSC-IP-F-24 OPRP VERIFICATION SCHEDULE.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>27</td>
                                <td>FSSC-IP-F-25 PAS 223 AUDIT CHECKLIST FOR IR</td>
                                <td><a href="{{asset('assets/food-safety-documents/Forms/FSSC-IP-F-25 PAS 223 AUDIT CHECKLIST FOR IR.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>28</td>
                                <td>FSSC-IP-F-26CHECKLIST FOR WASHROOMS AND CHANGING ROOM AREAS</td>
                                <td><a href="{{asset('assets/food-safety-documents/Forms/FSSC-IP-F-26CHECKLIST FOR WASHROOMS AND CHANGING ROOM AREAS.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>29</td>
                                <td>FSSC-IP-F-27 HACCP QUESTIONNAIRE FOR SUPPLIERS</td>
                                <td><a href="{{asset('assets/food-safety-documents/Forms/FSSC-IP-F-27 HACCP QUESTIONNAIRE FOR SUPPLIERS.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>30</td>
                                <td>FSSC-IP-F-28 PEST MANGEMENT ATTENDANCE</td>
                                <td><a href="{{asset('assets/food-safety-documents/Forms/FSSC-IP-F-28 PEST MANGEMENT ATTENDANCE.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>31</td>
                                <td>FSSC-IP-F-29 PEST MANAGENEMT AUDIT CHECKLIST</td>
                                <td><a href="{{asset('assets/food-safety-documents/Forms/FSSC-IP-F-29 PEST MANAGENEMT AUDIT CHECKLIST.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>32</td>
                                <td>FSSC-IP-F-30 VISITORS HEALTH QUESTIONNAIRE</td>
                                <td><a href="{{asset('assets/food-safety-documents/Forms/FSSC-IP-F-30 VISITORS HEALTH QUESTIONNAIRE.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>33</td>
                                <td>FSSC-IP-F-31 CLEANING CHEMICALS ISSUANCE RECORD</td>
                                <td><a href="{{asset('assets/food-safety-documents/Forms/FSSC-IP-F-31 CLEANING CHEMICALS ISSUANCE RECORD.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>34</td>
                                <td>FSSC-IP-F-32 Master Sanitation Schedule</td>
                                <td><a href="{{asset('assets/food-safety-documents/Forms/FSSC-IP-F-32 Master Sanitation Schedule.xls')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>35</td>
                                <td>FSSC-IP-F-33 PRODUCT RECALL WITHDRAWAL TEAM</td>
                                <td><a href="{{asset('assets/food-safety-documents/Forms/FSSC-IP-F-33 PRODUCT RECALL WITHDRAWAL TEAM.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>36</td>
                                <td>FSSC-IP-F-34 FOOD DEFENSE TEAM</td>
                                <td><a href="{{asset('assets/food-safety-documents/Forms/FSSC-IP-F-34 FOOD DEFENSE TEAM.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>37</td>
                                <td>FSSC-IP-F-35 Food Defense Assessment questionnaire Form</td>
                                <td><a href="{{asset('assets/food-safety-documents/Forms/FSSC-IP-F-35 Food Defense Assessment questionnaire Form.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>38</td>
                                <td>FSSC-IP-F-36 Food Defense Solution Form</td>
                                <td><a href="{{asset('assets/food-safety-documents/Forms/FSSC-IP-F-36 Food Defense Solution Form.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>39</td>
                                <td>FSSC-IP-F-37 Food Defense Implementation form</td>
                                <td><a href="{{asset('assets/food-safety-documents/Forms/FSSC-IP-F-37 Food Defense Implementation form.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>40</td>
                                <td>FSSC-IP-F-38 FOOD SAFETY QUESTIONNAIRE FOR SUPPLIER APPROVAL</td>
                                <td><a href="{{asset('assets/food-safety-documents/Forms/FSSC-IP-F-38 FOOD SAFETY QUESTIONNAIRE FOR SUPPLIER APPROVAL.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>41</td>
                                <td>FSSC-IP-F-39 FOOD SAFETY AUDIT CHECKLIST FOR SUPPLIER APPROVAL</td>
                                <td><a href="{{asset('assets/food-safety-documents/Forms/FSSC-IP-F-39 FOOD SAFETY AUDIT CHECKLIST FOR SUPPLIER APPROVAL.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>42</td>
                                <td>FSSC-IP-F-40 CATEGORY WISE LIST OF RM</td>
                                <td><a href="{{asset('assets/food-safety-documents/Forms/FSSC-IP-F-40 CATEGORY WISE LIST OF RM.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>43</td>
                                <td>FSSC-IP-F-41 PRP PLAN AND IMPLEMENTATION</td>
                                <td><a href="{{asset('assets/food-safety-documents/Forms/FSSC-IP-F-41 PRP PLAN AND IMPLEMENTATION.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>44</td>
                                <td>FSSC-IP-F-59 LIST OF BRITTLE PLASTICS AND GLASS</td>
                                <td><a href="{{asset('assets/food-safety-documents/Forms/FSSC-IP-F-59 LIST OF BRITTLE PLASTICS AND GLASS.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>45</td>
                                <td>FSSC-IP-F-61 RA OF FOOD Defence</td>
                                <td><a href="{{asset('assets/food-safety-documents/Forms/FSSC-IP-F-61 RA OF FOOD Defence.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>46</td>
                                <td>HACCP Study BUFC latest</td>
                                <td><a href="{{asset('assets/food-safety-documents/HACCP Study/HACCP Study BUFC latest.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>47</td>
                                <td>HACCP Study BUFP Latest</td>
                                <td><a href="{{asset('assets/food-safety-documents/HACCP Study/HACCP Study BUFP Latest.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>48</td>
                                <td>FSSC-IP-P-01 PROCEDURE FOR HAZARD ANALYSIS</td>
                                <td><a href="{{asset('assets/food-safety-documents/Procedures/FSSC-IP-P-01 PROCEDURE FOR HAZARD ANALYSIS.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>49</td>
                                <td>FSSC-IP-P-03 PROCEDURE FOR FOREIGN MATTER POLICY</td>
                                <td><a href="{{asset('assets/food-safety-documents/Procedures/FSSC-IP-P-03 PROCEDURE FOR FOREIGN MATTER POLICY.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>50</td>
                                <td>FSSC-IP-P-04 PROCEDURE FOR COSTRUCTION ACTIVITY</td>
                                <td><a href="{{asset('assets/food-safety-documents/Procedures/FSSC-IP-P-04 PROCEDURE FOR COSTRUCTION ACTIVITY.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>51</td>
                                <td>FSSC-IP-P-05 PROCEDURE FOR ANNUAL CLEANING</td>
                                <td><a href="{{asset('assets/food-safety-documents/Procedures/FSSC-IP-P-05 PROCEDURE FOR ANNUAL CLEANING.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>52</td>
                                <td>FSSC-IP-P-06 PROCEDURE FOR PRODUCT RECALL AND WITHDRAWAL REV 01</td>
                                <td><a href="{{asset('assets/food-safety-documents/Procedures/FSSC-IP-P-06 PROCEDURE FOR PRODUCT RECALL AND WITHDRAWAL REV 01.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>53</td>
                                <td>FSSC-IP-P-06 PROCEDURE FOR PRODUCT RECALL AND WITHDRAWAL</td>
                                <td><a href="{{asset('assets/food-safety-documents/Procedures/FSSC-IP-P-06 PROCEDURE FOR PRODUCT RECALL AND WITHDRAWAL.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>53</td>
                                <td>FSSC-IP-P-07 PROCEDURE FOR CONTROL OF NON CONFORMITY AND CORRECTIVE ACTIONS</td>
                                <td><a href="{{asset('assets/food-safety-documents/Procedures/FSSC-IP-P-07 PROCEDURE FOR CONTROL OF NON CONFORMITY AND CORRECTIVE ACTIONS.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>54</td>
                                <td>FSSC-IP-P-08 PROCEDURE FOR FOOD DEFENCE</td>
                                <td><a href="{{asset('assets/food-safety-documents/Procedures/FSSC-IP-P-08 PROCEDURE FOR FOOD DEFENCE.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>55</td>
                                <td>FSSC-IP-P-09 SHARP POLICY</td>
                                <td><a href="{{asset('assets/food-safety-documents/Procedures/FSSC-IP-P-09 SHARP POLICY.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>56</td>
                                <td>FRT_SVA_Packages Converter Limited_Pakistan_22052021_Report</td>
                                <td><a href="{{asset('assets/food-safety-documents/SMETA/FRT_SVA_Packages Converter Limited_Pakistan_22052021_Report.pdf')}}" target="_blank">Download</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('footer')
@endsection