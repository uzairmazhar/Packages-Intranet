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
                        <h3 class="font-weight-700 text-title-large margin-bottom-25px">IMS Documents</h3>
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
                                <td>EnMs-Dept-WI-01-Work Instructions for</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/EnMs-Dept-WI-01-Work-Instructions-for.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>2</td>
                                <td>Action Plan HVAC</td>
                                <td><a href="{{asset('assets/IMS-documents/Aspect-Impact-Study/Action-Plan-HVAC.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>3</td>
                                <td>Aspect Impact CPD</td>
                                <td><a href="{{asset('assets/IMS-documents/Aspect-Impact-Study/Aspect-Impact-CPD.xls')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>4</td>
                                <td>Aspect Impact Stores and Inventory</td>
                                <td><a href="{{asset('assets/IMS-documents/Aspect-Impact-Study/Aspect-Impact-Stores-and-Inventory.xls')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>5</td>
                                <td>Aspect Impact Study Admin</td>
                                <td><a href="{{asset('assets/IMS-documents/Aspect-Impact-Study/Aspect-Impact-Study-Admin.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>6</td>
                                <td>Aspect Impact study BUFP</td>
                                <td><a href="{{asset('assets/IMS-documents/Aspect-Impact-Study/Aspect-Impact-study-BUFP.xls')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>7</td>
                                <td>Aspect Impact Study Diesel Power Plant</td>
                                <td><a href="{{asset('assets/IMS-documents/Aspect-Impact-Study/Aspect-Impact-Study-Diesel-Power-Plant.xls')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>8</td>
                                <td>Aspect Impact Study Steam Power Plant</td>
                                <td><a href="{{asset('assets/IMS-documents/Aspect-Impact-Study/Aspect-Impact-Study-Steam-Power-Plant.xls')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>9</td>
                                <td>Aspect Impact Study Tissue Manufacturing PM 9</td>
                                <td><a href="{{asset('assets/IMS-documents/Aspect-Impact-Study/Aspect-Impact-Study-Tissue-Manufacturing-PM-9.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>10</td>
                                <td>Aspect Impact Study Workshop</td>
                                <td><a href="{{asset('assets/IMS-documents/Aspect-Impact-Study/Aspect-Impact-Study-Workshop.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>11</td>
                                <td>Aspect Impact-Boiler(new) BUFC</td>
                                <td><a href="{{asset('assets/IMS-documents/Aspect-Impact-Study/Aspect-Impact-Boiler(new)-BUFC.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>12</td>
                                <td>Aspect Impact-CC BUFC</td>
                                <td><a href="{{asset('assets/IMS-documents/Aspect-Impact-Study/Aspect-Impact-CC-BUFC.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>13</td>
                                <td>Aspect Impact-Cup making BUFC</td>
                                <td><a href="{{asset('assets/IMS-documents/Aspect-Impact-Study/Aspect-Impact-Cup-making-BUFC.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>14</td>
                                <td>Aspect Impact-Die making BUFC</td>
                                <td><a href="{{asset('assets/IMS-documents/Aspect-Impact-Study/Aspect-Impact-Die-making-BUFC.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>15</td>
                                <td>Aspect Impact-FG(new) - BUFC</td>
                                <td><a href="{{asset('assets/IMS-documents/Aspect-Impact-Study/Aspect-Impact-FG(new)-BUFC.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>16</td>
                                <td>Aspect Impact-Lemanic(new) - BUFC</td>
                                <td><a href="{{asset('assets/IMS-documents/Aspect-Impact-Study/Aspect-Impact-Lemanic(new)-BUFC.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>17</td>
                                <td>Aspect Impact-Main Office Building</td>
                                <td><a href="{{asset('assets/IMS-documents/Aspect-Impact-Study/Aspect-Impact-Main-Office-Building.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>18</td>
                                <td>Aspect Impact-OP(new) - BUFC</td>
                                <td><a href="{{asset('assets/IMS-documents/Aspect-Impact-Study/Aspect-Impact-OP(new)-BUFC.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>19</td>
                                <td>Aspect Impact-Planning BUFC</td>
                                <td><a href="{{asset('assets/IMS-documents/Aspect-Impact-Study/Aspect-Impact-Planning-BUFC.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>20</td>
                                <td>Aspect Impact-Poly Lamination BUFC</td>
                                <td><a href="{{asset('assets/IMS-documents/Aspect-Impact-Study/Aspect-Impact-Poly-Lamination-BUFC.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>21</td>
                                <td>Aspect-Impact Study HVAC</td>
                                <td><a href="{{asset('assets/IMS-documents/Aspect-Impact-Study/Aspect-Impact-Study-HVAC.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>22</td>
                                <td>EMS objectives  targets BUFP</td>
                                <td><a href="{{asset('assets/IMS-documents/Aspect-Impact-Study/EMS-objectives-targets-BUFP.xls')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>23</td>
                                <td>Environmental Management Program BUFP</td>
                                <td><a href="{{asset('assets/IMS-documents/Aspect-Impact-Study/Environmental-Management-Program-BUFP.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>24</td>
                                <td>Flow Diagram HVAC</td>
                                <td><a href="{{asset('assets/IMS-documents/Aspect-Impact-Study/Flow-Diagram-HVAC.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>25</td>
                                <td>Objectives & Targets HVAC</td>
                                <td><a href="{{asset('assets/IMS-documents/Aspect-Impact-Study/Objectives-&-Targets-HVAC.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>26</td>
                                <td>Significant Aspects BUFP</td>
                                <td><a href="{{asset('assets/IMS-documents/Aspect-Impact-Study/Significant-Aspects-BUFP.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>27</td>
                                <td>EnMs-Dept-WI-01-Work-Instructions-for</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/EnMs-Dept-WI-01-Work-Instructions-for.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>28</td>
                                <td>EnMs-ManEx-F-01 Energy Review</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/EnMs-ManEx-F-01-Energy-Review.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>29</td>
                                <td>EnMs-ManEx-F-03 Energy Baseline</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/EnMs-ManEx-F-03-Energy-Baseline.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>30</td>
                                <td>EnMs-ManEx-F-04 Energy Management Plan</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/EnMs-ManEx-F-04-Energy-Management-Plan.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>31</td>
                                <td>EnMs-ManEx-F-05 Design and Modification</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/EnMs-ManEx-F-05-Design-and-Modification.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>32</td>
                                <td>EnMs-ManEx-F-06 Internal Audit Checklist</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/EnMs-ManEx-F-06-Internal-Audit-Checklist.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>33</td>
                                <td>EnMs-ManEx-F-07 Measurement & Monitoring Plan</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/EnMs-ManEx-F-07-Measurement-&-Monitoring-Plan.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>34</td>
                                <td>EnMs-ManEx-F-08 List of External Origin Documents</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/EnMs-ManEx-F-08-List-of-External-Origin-Documents.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>35</td>
                                <td>EnMs-ManEx-F-09-Management Review</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/EnMs-ManEx-F-09-Management-Review.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>36</td>
                                <td>EnMs-ManEx-F-10 Energy Incident Reporting (Green Slip)</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/EnMs-ManEx-F-10-Energy-Incident-Reporting(Green Slip).docx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>37</td>
                                <td>EnMs-ManEx-F-11 Investigation and Corrective Action on Energy Incidents</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/EnMs-ManEx-F-11-Investigation-and-Corrective-Action-on-Energy-Incidents.docx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>38</td>
                                <td>EnMs-ManEx-F-12 Energy Incidents Log</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/EnMs-ManEx-F-12-Energy-Incidents-Log.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>39</td>
                                <td>FIRE PROTECTION IMPAIRMENT FORM</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/FIRE-PROTECTION-IMPAIRMENT-FORM.docx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>40</td>
                                <td>IMS-IP-F-01,OHS Risk Assissment and Objective(1)</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/IMS-IP-F-01,OHS-Risk-Assissment-and-Objective(1).xls')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>41</td>
                                <td>IMS-IP-F-01,OHS Risk Assissment and Objective(2)</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/IMS-IP-F-01,OHS-Risk-Assissment-and-Objective(2).xls')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>42</td>
                                <td>IMS-IP-F-01,OHS Risk Assissment and Objective(3)</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/IMS-IP-F-01,OHS-Risk-Assissment-and-Objective(3).xls')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>43</td>
                                <td>IMS-IP-F-01b HIRAC</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/IMS-IP-F-01b-HIRAC.xlsm')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>44</td>
                                <td>IMS-IP-F-02 Aspect Impact Study</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/IMS-IP-F-02-Aspect-Impact-Study.xls')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>45</td>
                                <td>IMS-IP-F-03 Master List of controlled documents</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/IMS-IP-F-03-Master-List-of-controlled-documents.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>46</td>
                                <td>IMS-IP-F-04 Master list of records</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/IMS-IP-F-04-Master-list-of-records.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>47</td>
                                <td>IMS-IP-F-05 Change Request Form</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/IMS-IP-F-05 Change Request Form.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>48</td>
                                <td>IMS-IP-F-06 Register for Laws</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/IMS-IP-F-06 Register for Laws.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>49</td>
                                <td>IMS-IP-F-06 Register for Laws</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/IMS-IP-F-06 Register for Laws.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>50</td>
                                <td>IMS-IP-F-07 (Pink Slip)</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/IMS-IP-F-07 (Pink Slip).docx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>51</td>
                                <td>IMS-IP-F-09 NCR</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/IMS-IP-F-09 NCR.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>52</td>
                                <td>IMS-IP-F-10 Incident Log</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/IMS-IP-F-10 Incident Log.xls')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>53</td>
                                <td>IMS-IP-F-11 Competence Matrix</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/IMS-IP-F-11 Competence Matrix.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>54</td>
                                <td>IMS-IP-F-12 Training Calender</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/IMS-IP-F-12 Training Calender.xls')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>55</td>
                                <td>IMS-IP-F-13 Training Record Rev1</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/IMS-IP-F-13 Training Record Rev1.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>56</td>
                                <td>IMS-IP-F-14 Training Feedback by Participant</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/IMS-IP-F-14 Training Feedback by Participant.xls')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>57</td>
                                <td>IMS-IP-F-15 A Extensions to PTW</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/IMS-IP-F-15 A Extensions to PTW.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>58</td>
                                <td>IMS-IP-F-17 Mock Drill(1)</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/IMS-IP-F-17 Mock Drill(1).doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>59</td>
                                <td>IMS-IP-F-17 Mock Drill</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/IMS-IP-F-17 Mock Drill.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>60</td>
                                <td>IMS-IP-F-18 Measurement & Monitoring Plan</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/IMS-IP-F-18 Measurement & Monitoring Plan.xls')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>61</td>
                                <td>IMS-IP-F-19 Audit Plan 2012 BSPM</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/IMS-IP-F-19 Audit Plan 2012 BSPM.xls')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>62</td>
                                <td>IMS-IP-F-20 Audit checklist</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/IMS-IP-F-20 Audit checklist.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>63</td>
                                <td>IMS-IP-F-21 Audit Report</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/IMS-IP-F-21 Audit Report.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>64</td>
                                <td>IMS-IP-F-22 Calibration Matrix</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/IMS-IP-F-22 Calibration Matrix.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>65</td>
                                <td>IMS-IP-F-26 Vehicle Inspection Checklist</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/IMS-IP-F-26 Vehicle Inspection Checklist.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>66</td>
                                <td>IMS-IP-F-27 Civil Defence</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/IMS-IP-F-27 Civil Defence.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>67</td>
                                <td>IMS-IP-F-28 Electricity Rules 1937 (Review -  Feb 07)</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/IMS-IP-F-28 Electricity Rules 1937 (Review -  Feb 07).doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>68</td>
                                <td>IMS-IP-F-29 Petroleum Rules, 1937 (Review Feb-07)</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/IMS-IP-F-29 Petroleum Rules, 1937 (Review Feb-07).doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>69</td>
                                <td>IMS-IP-F-30 The Boilers & Pressure Vessel Ordinance 2002 (Reviewed - Feb 07)</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/IMS-IP-F-30 The Boilers & Pressure Vessel Ordinance 2002 (Reviewed - Feb 07).doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>70</td>
                                <td>IMS-IP-F-31A Compressed Air Audit Report & IMS-IP-F-31B Comparison of Compressed Air Audt</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/IMS-IP-F-31A Compressed Air Audit Report & IMS-IP-F-31B Comparison of Compressed Air Audt.xls')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>71</td>
                                <td>IMS-IP-F-32 A,B,C,D Steam & Water Audit Report</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/IMS-IP-F-32 A,B,C,D Steam & Water Audit Report.xls')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>72</td>
                                <td>IMS-IP-F-33Input output diagram</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/IMS-IP-F-33Input output diagram.xls')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>73</td>
                                <td>IMS-IP-F-34PAPER CONSUMPTION RECORD</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/IMS-IP-F-34PAPER CONSUMPTION RECORD.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>74</td>
                                <td>IMS-IP-F-35 Objectives & programmes</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/IMS-IP-F-35 Objectives & programmes.docx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>75</td>
                                <td>IMS-IP-F36 Factories Act-1934  Factories Rules 1978</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/IMS-IP-F36 Factories Act-1934  Factories Rules 1978.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>76</td>
                                <td>IMS-IP-F-37 Safety Audit for contractor</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/IMS-IP-F-37 Safety Audit for contractor.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>77</td>
                                <td>IMS-IP-F-38 Requirements from contractor</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/IMS-IP-F-38 Requirements from contractor.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>78</td>
                                <td>IMS-IP-F-39 Minutes of Management Review</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/IMS-IP-F-39 Minutes of Management Review.docx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>79</td>
                                <td>Packages MOC-RA Form</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/Packages MOC-RA Form.xls')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>80</td>
                                <td>PackagesAccidentInvestigationForm</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/PackagesAccidentInvestigationForm.xls')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>81</td>
                                <td>TRA Form</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Forms/PackagesAccidentInvestigationForm.xls')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>82</td>
                                <td>By-passing Interlocks Procedure</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Procedures/By-passing Interlocks Procedure.docx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>83</td>
                                <td>EnMs-ManEx-P-01 Procedure for Conducting Energy Review</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Procedures/EnMs-ManEx-P-01 Procedure for Conducting Energy Review.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>84</td>
                                <td>EnMs-ManEx-P-02 Energy Management Plan</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Procedures/EnMs-ManEx-P-02 Energy Management Plan.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>85</td>
                                <td>EnMs-ManEx-P-03 Calibration Procedure</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Procedures/EnMs-ManEx-P-03 Calibration Procedure.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>86</td>
                                <td>EnMs-ManEx-P-04 Energy Incident Reporting & Investigation</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Procedures/EnMs-ManEx-P-04 Energy Incident Reporting & Investigation.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>87</td>
                                <td>Fire Protection System Impairment Procedure</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Procedures/Fire Protection System Impairment Procedure.docx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>88</td>
                                <td>IMS_manual_Final</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Procedures/IMS_manual_Final.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>89</td>
                                <td>IMS-IP-P-01 Procedure for Planning Aspect and Impact & HIRAC</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Procedures/IMS-IP-P-01 Procedure for Planning Aspect and Impact & HIRAC.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>90</td>
                                <td>IMS-IP-P-02 Doc & Record Control</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Procedures/IMS-IP-P-02 Doc & Record Control.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>91</td>
                                <td>IMS-IP-P-03 Legal & Other Requirements</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Procedures/IMS-IP-P-03 Legal & Other Requirements.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>92</td>
                                <td>IMS-IP-P-04 Organisation structure and communication</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Procedures/IMS-IP-P-04 Organisation structure and communication.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>93</td>
                                <td>IMS-IP-P-05 Training  Competence</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Procedures/IMS-IP-P-05 Training  Competence.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>94</td>
                                <td>IMS-IP-P-06 Permit To Work</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Procedures/IMS-IP-P-06 Permit To Work.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>95</td>
                                <td>IMS-IP-P-7 Emergency Response Plan Packages Administration</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Procedures/IMS-IP-P-7 Emergency Response Plan Packages Administration.docx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>96</td>
                                <td>IMS-IP-P-08 Measurement & Monitoring</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Procedures/IMS-IP-P-08 Measurement & Monitoring.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>97</td>
                                <td>IMS-IP-P-09  Incident Investigation</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Procedures/IMS-IP-P-09  Incident Investigation.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>98</td>
                                <td>IMS-IP-P-10 Compliance Evaluation</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Procedures/IMS-IP-P-10 Compliance Evaluation.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>99</td>
                                <td>IMS-IP-P-11 Internal Audits</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Procedures/IMS-IP-P-11 Internal Audits.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>100</td>
                                <td>IMS-IP-P-12 Calibration Procedure</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Procedures/IMS-IP-P-12 Calibration Procedure.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>101</td>
                                <td>Packages MOC Procedure</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Procedures/Packages MOC Procedure.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>102</td>
                                <td>PLF Appendix B</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Procedures/PLF Appendix B.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>103</td>
                                <td>Waste Handling Procedure</td>
                                <td><a href="{{asset('assets/IMS-documents/EHS-IMS-Procedures/Waste Handling Procedure.doc')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>104</td>
                                <td>(Risk assessment) PLF OHS-F-01ABC ETP (2) 23 11 2015-A</td>
                                <td><a href="{{asset('assets/IMS-documents/Risk Assessments/(Risk assessment) PLF OHS-F-01ABC ETP (2) 23 11 2015-A.xls')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>105</td>
                                <td>(Risk assessment) PLF OHS-F-01ABC ETP (2) 23.11.2015-A</td>
                                <td><a href="{{asset('assets/IMS-documents/Risk Assessments/(Risk assessment) PLF OHS-F-01ABC ETP (2) 23.11.2015-A.xls')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>106</td>
                                <td>BUFC  21331</td>
                                <td><a href="{{asset('assets/IMS-documents/Risk Assessments/BUFC  21331.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>107</td>
                                <td>BUFC  Die making</td>
                                <td><a href="{{asset('assets/IMS-documents/Risk Assessments/BUFC  Die making.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>108</td>
                                <td>BUFC Boiler Risk assessment</td>
                                <td><a href="{{asset('assets/IMS-documents/Risk Assessments/BUFC Boiler Risk assessment.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>109</td>
                                <td>BUFC FG Corruwall store</td>
                                <td><a href="{{asset('assets/IMS-documents/Risk Assessments/BUFC FG Corruwall store.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>110</td>
                                <td>BUFC Finished Godds Store RA</td>
                                <td><a href="{{asset('assets/IMS-documents/Risk Assessments/BUFC Finished Godds Store RA.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>111</td>
                                <td>BUFC IMS-IP-F-01OHS Risk Assissment -Dengue with pictures</td>
                                <td><a href="{{asset('assets/IMS-documents/Risk Assessments/BUFC IMS-IP-F-01OHS Risk Assissment -Dengue with pictures.xls')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>112</td>
                                <td>BUFC inkstore</td>
                                <td><a href="{{asset('assets/IMS-documents/Risk Assessments/BUFC inkstore.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>113</td>
                                <td>BUFC KBA RA</td>
                                <td><a href="{{asset('assets/IMS-documents/Risk Assessments/BUFC KBA RA.xls')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>114</td>
                                <td>BUFC KPI office IMS-IP-F-01,OHS Risk Assissment and Objective</td>
                                <td><a href="{{asset('assets/IMS-documents/Risk Assessments/BUFC KPI office IMS-IP-F-01,OHS Risk Assissment and Objective.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>115</td>
                                <td>BUFC offset COMMON risk assessment 2014</td>
                                <td><a href="{{asset('assets/IMS-documents/Risk Assessments/BUFC offset COMMON risk assessment 2014.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>116</td>
                                <td>BUFC Poly IMS-IP-F-01OHS Risk Assissment and Objective-2014</td>
                                <td><a href="{{asset('assets/IMS-documents/Risk Assessments/BUFC Poly IMS-IP-F-01OHS Risk Assissment and Objective-2014.xls')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>117</td>
                                <td>BUFC R1 revised 2-04.14</td>
                                <td><a href="{{asset('assets/IMS-documents/Risk Assessments/BUFC R1 revised 2-04.14.xls')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>118</td>
                                <td>BUFC RA for Back up area</td>
                                <td><a href="{{asset('assets/IMS-documents/Risk Assessments/BUFC RA for Back up area.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>119</td>
                                <td>BUFC Reel store RA</td>
                                <td><a href="{{asset('assets/IMS-documents/Risk Assessments/BUFC Reel store RA.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>120</td>
                                <td>BUFC Risk asses 21326 ( 2015 )</td>
                                <td><a href="{{asset('assets/IMS-documents/Risk Assessments/BUFC Risk asses 21326 ( 2015 ).xls')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>121</td>
                                <td>BUFC Risk Asses 21330 ( 2015 )</td>
                                <td><a href="{{asset('assets/IMS-documents/Risk Assessments/BUFC Risk Asses 21330 ( 2015 ).xls')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>122</td>
                                <td>BUFC Risk asses RA CC 21301 -15 ( 2015 )</td>
                                <td><a href="{{asset('assets/IMS-documents/Risk Assessments/BUFC Risk asses RA CC 21301 -15 ( 2015 ).xls')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>123</td>
                                <td>BUFC Risk assesment Bailer RA ( 2015 )</td>
                                <td><a href="{{asset('assets/IMS-documents/Risk Assessments/BUFC Risk assesment Bailer RA ( 2015 ).xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>124</td>
                                <td>BUFC RISK ASSESMENT BLEACHING WAREHOUSE(BUFC)</td>
                                <td><a href="{{asset('assets/IMS-documents/Risk Assessments/BUFC RISK ASSESMENT BLEACHING WAREHOUSE(BUFC).xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>125</td>
                                <td>BUFC Risk assesment Nova Cut ( 2015 )</td>
                                <td><a href="{{asset('assets/IMS-documents/Risk Assessments/BUFC Risk assesment Nova Cut ( 2015 ).xls')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>126</td>
                                <td>BUFC Risk assesmn 21328 ( 2015 )</td>
                                <td><a href="{{asset('assets/IMS-documents/Risk Assessments/BUFC Risk assesmn 21328 ( 2015 ).xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>127</td>
                                <td>BUFC Roto machines</td>
                                <td><a href="{{asset('assets/IMS-documents/Risk Assessments/BUFC Roto machines.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>128</td>
                                <td>BUFC solvent store</td>
                                <td><a href="{{asset('assets/IMS-documents/Risk Assessments/BUFC solvent store.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>129</td>
                                <td>IMS F-01 RA HVAC</td>
                                <td><a href="{{asset('assets/IMS-documents/Risk Assessments/IMS F-01 RA HVAC.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>130</td>
                                <td>IMS-IP-F-01, HIRA of Photopolymer section, Reproduction Department 2015</td>
                                <td><a href="{{asset('assets/IMS-documents/Risk Assessments/IMS-IP-F-01, HIRA of Photopolymer section, Reproduction Department 2015.xls')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>131</td>
                                <td>IMS-IP-F-01,OHS Risk Assissment and Objective Administration 2015</td>
                                <td><a href="{{asset('assets/IMS-documents/Risk Assessments/IMS-IP-F-01,OHS Risk Assissment and Objective Administration 2015.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>132</td>
                                <td>IMS-IP-F-01,OHS Risk Assissment and Objective-2015 R&D</td>
                                <td><a href="{{asset('assets/IMS-documents/Risk Assessments/IMS-IP-F-01,OHS Risk Assissment and Objective-2015 R&D.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>133</td>
                                <td>IMS-IP-F-01,OHS Risk Assissment BU-MF&RC</td>
                                <td><a href="{{asset('assets/IMS-documents/Risk Assessments/IMS-IP-F-01,OHS Risk Assissment BU-MF&RC.xls')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>134</td>
                                <td>OHS Risk Assissment revised  2015 BUFL</td>
                                <td><a href="{{asset('assets/IMS-documents/Risk Assessments/OHS Risk Assissment revised  2015 BUFL.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>135</td>
                                <td>Risk Assesment  LFG</td>
                                <td><a href="{{asset('assets/IMS-documents/Risk Assessments/Risk Assesment  LFG.xls')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>136</td>
                                <td>Risk Assessment TL Deptt-2015</td>
                                <td><a href="{{asset('assets/IMS-documents/Risk Assessments/Risk Assessment TL Deptt-2015.xls')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>137</td>
                                <td>Risk assessment updated file by mubashir.xls .2015.xls(14.07.2015)</td>
                                <td><a href="{{asset('assets/IMS-documents/Risk Assessments/Risk assessment updated file by mubashir.xls .2015.xls(14.07.2015).xls')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>138</td>
                                <td>RMS-1& 2</td>
                                <td><a href="{{asset('assets/IMS-documents/Risk Assessments/RMS-1& 2.xls')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>139</td>
                                <td>RMS-3</td>
                                <td><a href="{{asset('assets/IMS-documents/Risk Assessments/RMS-3.xls')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>140</td>
                                <td>RMS-5</td>
                                <td><a href="{{asset('assets/IMS-documents/Risk Assessments/RMS-5.xls')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>141</td>
                                <td>RMS-6</td>
                                <td><a href="{{asset('assets/IMS-documents/Risk Assessments/RMS-6.xls')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>142</td>
                                <td>RMS-7</td>
                                <td><a href="{{asset('assets/IMS-documents/Risk Assessments/RMS-7.xls')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>143</td>
                                <td>RMS-9</td>
                                <td><a href="{{asset('assets/IMS-documents/Risk Assessments/RMS-9.xls')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>144</td>
                                <td>Updated Risk Assessment by M.Hassan kabir CPD</td>
                                <td><a href="{{asset('assets/IMS-documents/Risk Assessments/Updated Risk Assessment by M.Hassan kabir CPD.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>145</td>
                                <td>Updated Risk Assessment TM Deptt-2015 by M hassan kabir</td>
                                <td><a href="{{asset('assets/IMS-documents/Risk Assessments/Updated Risk Assessment TM Deptt-2015 by M hassan kabir.xls')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>146</td>
                                <td>updated(Risk assessment) ETP by hassan kabir</td>
                                <td><a href="{{asset('assets/IMS-documents/Risk Assessments/updated(Risk assessment) ETP by hassan kabir.xlsx')}}" target="_blank">Download</a></td>
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