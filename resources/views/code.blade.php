@extends('layouts.app')

@section('content')

                <h3>Bubble Sort</h3>

                <div>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
               </div>
                
                <br>
                <pre>
                    <code>void bubbleSort(int arr[], int n) {
                        
                              bool swapped = true;
                        
                              int j = 0;
                        
                              int tmp;
                        
                              while (swapped) {
                        
                                    swapped = false;
                        
                                    j++;
                        
                                    for (int i = 0; i < n - j; i++) {
                        
                                          if (arr[i] > arr[i + 1]) {
                        
                                                tmp = arr[i];
                        
                                                arr[i] = arr[i + 1];
                        
                                                arr[i + 1] = tmp;
                        
                                                swapped = true;
                        
                                          }
                        
                                    }
                        
                              }
                        
                        }
                </code>
            </pre>

@endsection
