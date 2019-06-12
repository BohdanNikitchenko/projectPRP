package com.example.prp.fragment;

import android.content.Context;
import android.net.Uri;
import android.os.Bundle;
import android.app.Fragment;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.GridView;
import android.widget.Toast;

import com.example.prp.R;

/**
 * A simple {@link Fragment} subclass.
 * Activities that contain this fragment must implement the
 * {@link FragmentZvoRate.OnFragmentInteractionListener} interface
 * to handle interaction events.
 * Use the {@link FragmentZvoRate#newInstance} factory method to
 * create an instance of this fragment.
 */
public class FragmentZvoRate extends Fragment {
    // TODO: Rename parameter arguments, choose names that match
    // the fragment initialization parameters, e.g. ARG_ITEM_NUMBER
    private static final String ARG_PARAM1 = "param1";
    private static final String ARG_PARAM2 = "param2";

    // TODO: Rename and change types of parameters
    private String mParam1;
    private String mParam2;

    private String[] uns = {
            "Київський національний університет імені Тараса Шевченка\n",
            "Харківський національний університет імені В.Н. Каразіна\n",
            "Національний технічний університет України «Київський політехнічний інститут імені ігоря Сікорського»\n",
            "Львівський національний університет імені Івана Франка\n",
            "Національний університет «Львівська політехніка»\n",
            "Національний університет «Києво-Могилянська академія»\n",
            "Національний медичний університет імені О.О. Богомольця\n",
            "Дніпровський національний університет імені Олеся Гончара\n",
            "Одеський національний університет імені І.І. Мечникова\n",
            "Сумський державний університет\n",
            "Львівський національний медичний університет імені Данила Галицького\n",
            "Національний авіаційний університет\n",
            "Чернівецький національний університет імені Юрія Федьковича\n",
            "Національний фармацевтичний університет\n",
            "Харківський національний медичний університет\n",
            "Національний технічний університет «Харківський політехнічний інститут»\n",
            "Дніпропетровська медична академія\n",
            "Донецький національний університет імені Василя Стуса\n",
            "Національний аерокосмічний університет ім. М.Є. Жуковського «Харківський авіаційний інститут»\n",
            "Харківський національний університет радіоелектроніки\n",
    };
    private String[] rates = {
            "ТОП 200 Україна: 1\nScopus: 1",
            "ТОП 200 Україна: 3\nScopus: 2",
            "ТОП 200 Україна: 1\nScopus: 6",
            "ТОП 200 Украна: 10\nScopus: 3",
            "ТОП 200 Україна: 5\nScopus: 9",
            "ТОП 200 Україна: 12\nScopus: 18",
            "ТОП 200 Україна: 7\nScopus: 19",
            "ТОП 200 Україна: 14\nScopus: 8",
            "ТОП 200 Україна: 18\nScopus: 5",
            "ТОП 200 Україна: 9\nScopus: 14",
            "ТОП 200 Україна: 43\nScopus: 11",
            "ТОП 200 Україна: 19\nScopus: 28",
            "ТОП 200 Україна: 24\nScopus: 4",
            "ТОП 200 Україна: 20\nScopus: 31",
            "ТОП 200 Україна: 31\nScopus: 25",
            "ТОП 200 Україна: 4\nScopus: 10",
            "ТОП 200 Україна: 57\nScopus: 23",
            "ТОП 200 Україна: 27\nScopus: 17",
            "ТОП 200 Україна: 11\nScopus: 21",
            "ТОП 200 Україна: 1\nScopus: 6",
            "ТОП 200 Україна: 23\nScopus: 20"
    };
    GridView gridView;


    private OnFragmentInteractionListener mListener;

    public FragmentZvoRate() {
        // Required empty public constructor
    }

    /**
     * Use this factory method to create a new instance of
     * this fragment using the provided parameters.
     *
     * @param param1 Parameter 1.
     * @param param2 Parameter 2.
     * @return A new instance of fragment FragmentZvoRate.
     */
    // TODO: Rename and change types and number of parameters
    public static FragmentZvoRate newInstance(String param1, String param2) {
        FragmentZvoRate fragment = new FragmentZvoRate();
        Bundle args = new Bundle();
        args.putString(ARG_PARAM1, param1);
        args.putString(ARG_PARAM2, param2);
        fragment.setArguments(args);
        return fragment;
    }

    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        if (getArguments() != null) {
            mParam1 = getArguments().getString(ARG_PARAM1);
            mParam2 = getArguments().getString(ARG_PARAM2);
        }



    }

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
        // Inflate the layout for this fragment
        final View v = inflater.inflate(R.layout.fragment_fragment_zvo_rate, container, false);

        gridView = (GridView)v.findViewById(R.id.zvo_rate_grid);

        ArrayAdapter<String> arrayAdapter = new ArrayAdapter(this.getActivity(), android.R.layout.simple_list_item_1, uns);

        gridView.setAdapter(arrayAdapter);

        gridView.setOnItemClickListener(new AdapterView.OnItemClickListener() {
            @Override
            public void onItemClick(AdapterView<?> parent, View view, int position, long id) {
                Toast.makeText(view.getContext(), rates[position], Toast.LENGTH_SHORT).show();
            }
        });
        return v;
    }

    // TODO: Rename method, update argument and hook method into UI event
    public void onButtonPressed(Uri uri) {
        if (mListener != null) {
            mListener.onFragmentInteraction(uri);
        }
    }

/*    @Override
    public void onAttach(Context context) {
        super.onAttach(context);
        if (context instanceof OnFragmentInteractionListener) {
            mListener = (OnFragmentInteractionListener) context;
        } else {
            throw new RuntimeException(context.toString()
                    + " must implement OnFragmentInteractionListener");
        }
    }
*/
    @Override
    public void onDetach() {
        super.onDetach();
        mListener = null;
    }

    /**
     * This interface must be implemented by activities that contain this
     * fragment to allow an interaction in this fragment to be communicated
     * to the activity and potentially other fragments contained in that
     * activity.
     * <p>
     * See the Android Training lesson <a href=
     * "http://developer.android.com/training/basics/fragments/communicating.html"
     * >Communicating with Other Fragments</a> for more information.
     */
    public interface OnFragmentInteractionListener {
        // TODO: Update argument type and name
        void onFragmentInteraction(Uri uri);
    }
}
